<?php

namespace Tests\Feature\Http\Controllers\BestSellers;

use App\Http\Resources\BestSellers\ListResource;
use App\Http\Resources\BestSellers\BookResource;
use App\Models\User;
use App\Services\BestSellersBooks\DTO\BookList;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;
use App\Services\BestSellersBooks\DTO\Book;
use App\Services\BestSellersBooks\Enums\ListName;
use App\Users\Enums\Permission;
use App\Users\Enums\Role;
use Tests\TestCase;

class BookControllerTest extends TestCase
{
    public function testBooksSuccess()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response(collect($payload), Response::HTTP_OK),
        ]);

        /** @var User $user */
        $user = User::factory()->create();

        $user->givePermissionTo(Permission::ViewAllBooks);

        $lists = data_get($payload, 'results.lists.*.books');

        $books = collect($lists)
            ->flatten(1)
            ->mapInto(Book::class);

        $expected = BookResource::collection($books)
            ->response()
            ->getData(true);

        $response = $this
            ->actingAs($user)
            ->getJson(route('v1.books'));

        $response
            ->assertOk()
            ->assertExactJson($expected);
    }

    public function testListNamesSuccess()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response(collect($payload), Response::HTTP_OK),
        ]);

        $overview = data_get($payload, 'results.lists', []);

        $lists = collect($overview)->mapInto(BookList::class);;

        $expected = ListResource::collection($lists)
            ->response()
            ->getData(true);

        /** @var User $user */
        $user = User::factory()->create();

        $user->givePermissionTo(Permission::ViewListNames);

        $response = $this
            ->actingAs($user)
            ->getJson(route('v1.lists'));

        $response
            ->assertOk()
            ->assertExactJson($expected);
    }

    public function testListNamesAuthorization()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response(collect($payload), Response::HTTP_OK),
        ]);

        /** @var User $user */
        $user = User::factory()->create();

        /**
         * Grant all permissions aside from the ones checked 
         * within `viewListNames()` on ListsPolicy
         */
        $user->syncPermissions([
            Permission::ViewAllBooks,
            Permission::ViewBooksByDate,
            Permission::ViewBooksByList
        ]);

        $this
            ->actingAs($user)
            ->getJson(route('v1.lists'))
            ->assertForbidden();

        // Expect this to bypass the role assignment above
        $user->assignRole(Role::Admin);

        $this
            ->actingAs($user)
            ->getJson(route('v1.lists'))
            ->assertOk();

        $user->removeRole(Role::Admin);

        $this
            ->actingAs($user)
            ->getJson(route('v1.lists'))
            ->assertForbidden();

        // One last permission sync for expecting a successful response
        $user->syncPermissions([Permission::ViewListNames]);

        $this
            ->actingAs($user)
            ->getJson(route('v1.lists'))
            ->assertOk();
    }

    public function testListsOverviewSuccess()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response(collect($payload), Response::HTTP_OK),
        ]);

        /** @var User $user */
        $user = User::factory()->create();

        $user->givePermissionTo(Permission::ViewAllLists);

        $response = $this
            ->actingAs($user)
            ->getJson(route('v1.lists_overview'));

        $response
            ->assertOk()
            ->assertExactJson($payload);
    }

    public function testListsOverviewAuthorization()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response(collect($payload), Response::HTTP_OK),
        ]);

        /** @var User $user */
        $user = User::factory()->create();

        /**
         * Grant all permissions aside from the ones checked 
         * within `viewLists()` on ListsPolicy
         */
        $user->syncPermissions([
            Permission::ViewAllBooks,
            Permission::ViewBooksByDate,
            Permission::ViewBooksByList,
        ]);

        $this
            ->actingAs($user)
            ->getJson(route('v1.lists_overview'))
            ->assertForbidden();

        // Expect this to bypass the role assignment above
        $user->assignRole(Role::Admin);

        $this
            ->actingAs($user)
            ->getJson(route('v1.lists'))
            ->assertOk();

        $user->removeRole(Role::Admin);

        $this
            ->actingAs($user)
            ->getJson(route('v1.lists'))
            ->assertForbidden();

        // One last permission sync for expecting a successful response
        $user->syncPermissions([Permission::ViewAllLists]);

        $this
            ->actingAs($user)
            ->getJson(route('v1.lists'))
            ->assertOk();
    }

    public function testBooksByListNameSuccess()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response(collect($payload), Response::HTTP_OK),
        ]);

        /** @var User $user */
        $user = User::factory()->create();

        $user->givePermissionTo(Permission::ViewBooksByList);

        $lists = data_get($payload, 'results.books', []);

        $books = collect($lists)->mapInto(BookList::class);;

        $expected = BookResource::collection($books)
            ->response()
            ->getData(true);

        $response = $this
            ->actingAs($user)
            ->getJson(route('v1.books_by_list', ['list' => ListName::AudioFiction]));

        $response
            ->assertOk()
            ->assertExactJson($expected);
    }

    public function testBooksByListNameAuthorization()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response(collect($payload), Response::HTTP_OK),
        ]);

        /** @var User $user */
        $user = User::factory()->create();

        /**
         * Grant all permissions aside from the ones checked 
         * within `viewBooksByList()` on BooksPolicy
         */
        $user->syncPermissions([
            Permission::ViewAllLists,
            Permission::ViewListNames,
            Permission::ViewBooksByDate,
        ]);

        $this
            ->actingAs($user)
            ->getJson(route('v1.books_by_list', ['list' => ListName::AudioFiction]))
            ->assertForbidden();

        // Expect this to bypass the role assignment above
        $user->assignRole(Role::Admin);

        $this
            ->actingAs($user)
            ->getJson(route('v1.books_by_list', ['list' => ListName::AudioFiction]))
            ->assertOk();

        // Non-admins with the same permissions as above should not have access
        $user->removeRole(Role::Admin);

        $this
            ->actingAs($user)
            ->getJson(route('v1.books_by_list', ['list' => ListName::AudioFiction]))
            ->assertForbidden();

        // One last permissions sync to expect a successful response
        $user->syncPermissions([Permission::ViewBooksByList]);

        $this
            ->actingAs($user)
            ->getJson(route('v1.books_by_list', ['list' => ListName::AudioFiction]))
            ->assertOk();
    }

    public function testBooksByListAndDateSuccess()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response(collect($payload), Response::HTTP_OK),
        ]);

        /** @var User $user */
        $user = User::factory()->create();

        $user->assignRole(Role::Admin);

        $lists = data_get($payload, 'results.books', []);

        $books = collect($lists)->mapInto(BookList::class);;

        $expected = BookResource::collection($books)
            ->response()
            ->getData(true);

        $list = ListName::AudioFiction;

        $date = now()->subMonths(2)->format('Y-m-d');

        $response = $this
            ->actingAs($user)
            ->getJson(
                route(
                    'v1.books_by_list_and_date',
                    ['list' => $list, 'date' => $date]
                )
            );

        $response
            ->assertOk()
            ->assertExactJson($expected);
    }

    public function testBooksByListAndDateAuthorization()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response(collect($payload), Response::HTTP_OK),
        ]);

        /** @var User $user */
        $user = User::factory()->create();

        /**
         * Grant all permissions aside from the ones checked 
         * within `viewBooksByListAndDate()` on BooksPolicy
         */
        $user->syncPermissions([
            Permission::ViewAllLists,
            Permission::ViewListNames,
            Permission::ViewBooksByDate,
            Permission::ViewBooksByList
        ]);

        $list = ListName::AudioFiction;

        $date = now()->subMonths(2)->format('Y-m-d');

        $this
            ->actingAs($user)
            ->getJson(
                route(
                    'v1.books_by_list_and_date',
                    ['list' => $list, 'date' => $date]
                )
            )
            ->assertForbidden();

        // Expect this to bypass the role assignment above
        $user->assignRole(Role::Admin);

        $this
            ->actingAs($user)
            ->getJson(
                route(
                    'v1.books_by_list_and_date',
                    ['list' => $list, 'date' => $date]
                )
            )
            ->assertOk();

        // Non-Admins with the above permissions should not have access
        $user->removeRole(Role::Admin);

        $this
            ->actingAs($user)
            ->getJson(
                route(
                    'v1.books_by_list_and_date',
                    ['list' => $list, 'date' => $date]
                )
            )
            ->assertForbidden();

        // One last permissions sync to expect a successful response
        $user->syncPermissions([Permission::ViewBooksByListAndDate]);

        $this
            ->actingAs($user)
            ->getJson(
                route(
                    'v1.books_by_list_and_date',
                    ['list' => $list, 'date' => $date]
                )
            )
            ->assertOk();
    }

    public function testBooksByListNameValidation()
    {
        /** @var User $user */
        $user = User::factory()->create();

        $user->assignRole(Role::Admin);

        $response = $this
            ->actingAs($user)
            ->getJson(route('v1.books_by_list', ['list' => 'invalid']));

        $response->assertUnprocessable();

        $errors = data_get($response, 'errors');

        $this->assertArrayHasKey('list', $errors);

        $this->assertEquals('The selected list is invalid.', data_get($errors, 'list.0'));
    }

    public function testBooksByListNameAndDateValidation()
    {
        /** @var User $user */
        $user = User::factory()->create();

        $user->assignRole(Role::Admin);

        $response = $this
            ->actingAs($user)
            ->getJson(
                route(
                    'v1.books_by_list_and_date',
                    ['list' => 'invalid', 'date' => 'invalid']
                )
            );

        $response->assertUnprocessable();

        $errors = data_get($response, 'errors');

        $this->assertArrayHasKey('published_date', $errors);
        $this->assertArrayHasKey('list', $errors);

        $list = ListName::ChildrensMiddleGradeHardcover;

        $response = $this->getJson(
            route(
                'v1.books_by_list_and_date',
                ['list' => $list, 'date' => 'invalid']
            )
        );

        $response->assertUnprocessable();

        $errors = data_get($response, 'errors');

        $this->assertArrayHasKey('published_date', $errors);
        $this->assertArrayNotHasKey('list', $errors);

        $date = now()->subMonth();

        // We expect this 422 due to the date above not meeting the format expectations
        $response = $this->getJson(
            route(
                'v1.books_by_list_and_date',
                ['list' => $list, 'date' => $date]
            )
        );

        $response->assertUnprocessable();

        $errors = data_get($response, 'errors');

        $this->assertArrayHasKey('published_date', $errors);
        $this->assertArrayNotHasKey('list', $errors);

        $this->assertEquals(
            'The published date field must match the format Y-m-d.',
            data_get($errors, 'published_date.0')
        );
    }
}
