<?php

declare(strict_types=1);

namespace AkshitArora\PHPeace\PHPeace;

use AkshitArora\PHPeace\Contracts\PHPeaceContract;
use Illuminate\Support\Collection;

/**
 * Class PHPeace
 *
 * This class is responsible for generating peace quotes.
 * It implements the PHPeaceContract which requires a getQuote method.
 * The getQuote method fetches a random quote.
 *
 * @package AkshitArora\PHPeace\PHPeace
 */
class PHPeace implements PHPeaceContract
{
    /**
     * Get a peace quote.
     *
     * @return string
     */
    public function getQuote(): string
    {
        return $this->quotes()
            ->random();
    }

    /**
     * Get a collection of peace quotes.
     *
     * @return Collection
     */
    private function quotes(): Collection
    {
        return Collection::make([
            "Peace begins with a smile. - Mother Teresa",
            "Peace comes from within. Do not seek it without. - Buddha",
            "We can never obtain peace in the outer world until we make peace with ourselves. - Dalai Lama",
            "Peace is its own reward. - Mahatma Gandhi",
            "If we have no peace, it is because we have forgotten that we belong to each other. - Mother Teresa",
            "When you find peace within yourself, you become the kind of person who can live at peace with others. - Peace Pilgrim",
            "You cannot find peace by avoiding life. - Virginia Woolf",
            "A mind at peace, a mind centered and not focused on harming others, is stronger than any physical force in the universe. - Wayne Dyer",
            "If you want peace, you don't talk to your friends. You talk to your enemies. - Desmond Tutu",
            "Peace is not merely a distant goal that we seek, but a means by which we arrive at that goal. - Martin Luther King, Jr.",
            "Peace is not absence of conflict, it is the ability to handle conflict by peaceful means. - Ronald Reagan",
            "If there is to be peace in the world, there must be peace in the home. - Lao Tzu",
            "Each one has to find his peace from within. And peace to be real must be unaffected by outside circumstances. - Mahatma Gandhi",
            "Peace is not the absence of power. Peace is the presence of love. - Sri Chinmoy",
            "True peace is not merely the absence of tension: it is the presence of justice. - Martin Luther King, Jr.",
            "The life of inner peace, being harmonious and without stress, is the easiest type of existence. - Norman Vincent Peale",
            "The practice of forgiveness is our most important contribution to the healing of the world. - Marianne Williamson",
            "Peace cannot be kept by force; it can only be achieved by understanding. - Albert Einstein",
            "If you want to make peace with your enemy, you have to work with your enemy. Then he becomes your partner. - Nelson Mandela",
            "Peace is a journey of a thousand miles and it must be taken one step at a time. - Lyndon B. Johnson",
            "You'll never find peace of mind until you listen to your heart. - George Michael",
            "When the power of love overcomes the love of power the world will know peace. - Jimi Hendrix",
            "Peace is the beauty of life. It is sunshine. It is the smile of a child, the love of a mother, the joy of a father, the togetherness of a family. It is the advancement of man, the victory of a just cause, the triumph of truth. - Menachem Begin",
            "Peace cannot be achieved through violence, it can only be attained through understanding. - Ralph Waldo Emerson",
            "There is no 'way to peace,' there is only 'peace.' - Mahatma Gandhi",
            "If you want peace, stop fighting. If you want peace of mind, stop fighting with your thoughts. - Peter McWilliams",
            "Peace is the result of retraining your mind to process life as it is, rather than as you think it should be. - Wayne W. Dyer",
            "While you are proclaiming peace with your lips, be careful to have it even more fully in your heart. - Francis of Assisi",
            "There is no way to peace, peace is the way. - A.J. Muste",
            "You find peace not by rearranging the circumstances of your life, but by realizing who you are at the deepest level. - Eckhart Tolle",
            "Peace is liberty in tranquillity. - Marcus Tullius Cicero",
            "True peace comes from knowing that God is in control. - Unknown",
            "Peace is a daily, a weekly, a monthly process, gradually changing opinions, slowly eroding old barriers, quietly building new structures. - John F. Kennedy",
            "Do not let the behavior of others destroy your inner peace. - Dalai Lama",
            "Peace is always beautiful. - Walt Whitman",
            "A heart at peace gives life to the body. - Proverbs 14:30",
            "Peace is the simplicity of heart, serenity of mind, tranquility of soul, the bond of love. - Pio of Pietrelcina",
        ]);
    }
}
