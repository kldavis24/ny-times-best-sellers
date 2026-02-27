<?php

namespace App\Services\BestSellersBooks\Enums;

enum ListName: string
{
    case CombinedPrintAndEbookFiction = 'combined-print-and-e-book-fiction';
    case CombinedPrintAndEbookNonfiction = 'combined-print-and-e-book-nonfiction';
    case HardcoverFiction = 'hardcover-fiction';
    case HardcoverNonfiction = 'hardcover-nonfiction';
    case PaperbackTradeFiction = 'trade-fiction-paperback';
    case PaperbackNonfiction = 'paperback-nonfiction';
    case AdviceHowToAndMisc = 'advice-how-to-and-miscellaneous';
    case ChildrensMiddleGradeHardcover = 'childrens-middle-grade-hardcover';
    case ChildrensPictureBooks = 'picture-books';
    case ChildrensAndYoungAdultSeries = 'series-books';
    case YoungAdultHardcover = 'young-adult-hardcover';
    case AudioFiction = 'audio-fiction';
    case AudioNonfiction = 'audio-nonfiction';
    case Business = 'business-books';
    case GraphicBooksAndManga = 'graphic-books-and-manga';
    case MassMarket = 'mass-market-monthly';
    case MiddleGradePaperback = 'middle-grade-paperback-monthly';
    case YoungAdultPaperback = 'young-adult-paperback-monthly';

    public static function tryFromMixed(mixed $instance): ?self
    {
        if ($instance instanceof self) {
            return $instance;
        }

        return self::tryFrom($instance);
    }
}
