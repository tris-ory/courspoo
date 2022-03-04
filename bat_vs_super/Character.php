<?php
// Methods can return $this for chaining
/**
 * Class Character
 */
class Character
{
    /**
     * Niveau novice
     *
     * @var int
     */
    const NOVICE = 1;

    /**
     * Niveau moyen
     *
     * @var int
     */
    const MEDIUM = 2;

    /**
     * Niveau expert
     *
     * @var int
     */
    const EXPERT = 3;

    /**
     * Character name
     *
     * @var string
     */
    private string $name;

    /**
     * life points
     *
     * @var int
     */
    private int $life;

    /**
     * Character level
     *
     * @var int
     */
    private int $xp;

    /**
     * Character constructor.
     * life default value is 100
     * @param string $name
     * @param int $xp
     * @param int $life
     */
    public function __construct(string $name, int $xp = self::NOVICE, int $life = 100)
    {
        $this->name = $name;
        $this->life = $life;
        $this->xp = $xp;
    }

   // Getters and setters:

    /**
     * get the life points of character
     *
     * @return int
     */
    public function getLife(): int
    {
        return $this->life;
    }

    /**
     * set the life points of character
     *
     * @param int $life
     */
    public function setLife(int $life): self
    {
        $this->life = $life;
        return $this;
    }

    /**
     * get the xp level of the character
     *
     * @return int
     */
    public function getXP(): int
    {
        return $this->xp;
    }

    /**
     * set the xp level of the character
     *
     * @param $xp
     */
    public function setXP($xp): self
    {
        $this->xp = $xp;
        return $this;
    }

    /**
     * get the name of the character
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    // Actions :

    /**
     * Character greets the target name
     *
     * @param Character $target
     * @return string
     */
    public function greet(Character $target): string
    {
        return $this->name . " salue " . $target->getName();
    }

    /**
     * character attacks target character
     *
     * @param Character $target
     * @return string
     */
    public function attack(Character $target): string
    {
        $target_life = $target->getLife() - 10 * $this->xp;
        if ($target_life < 0)
            $target_life = 0;
        $target->setLife($target_life);
        return $this->action('une attaque', $target->getName());
    }

    /**
     * Character super-attack the target
     *
     * @param Character $target
     * @return string
     */
    public function superAttack(Character $target): string
    {
        $target_life = $target->getLife() - 20 * $this->xp;
        if ($target_life < 0)
            $target_life = 0;
        $target->setLife($target_life);
        return $this->action('une super-attaque', $target->getName());
    }

    /**
     * character launch a secret attack to target
     *
     * @param Character $target
     * @return string
     */
    public function secretAttack(Character $target): string
    {
        if($target->getLife() < 50){
            $target->setLife(0);
        }
        return $this->action('une attaque secrète', $target->getName());
    }

    /**
     * Character heals himself
     *
     * @return string
     */
    public function heal(): string
    {
        $this->life += 10;
        return $this->action('un soin', 'lui-même');
    }

    // Utilities :

    /**
     * get a formatted string with the name and the lifepoints of the character
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->name . ' : ' . $this->life . ' ';
    }

    /**
     * Send a formatted string with scoreboard of player1 & player2
     *
     * @param self $player1
     * @param self $player2
     * @param string $action
     * @return string
     */
    public static function score(self $player1, self $player2, string $action): string
    {
        return $action . ' ( ' . $player1->getState() . ' ' . $player2->getState() . ' )';
    }

    /**
     * get a formatted string who say what action is launch and the target name
     *
     * @param $action
     * @param $name
     * @return string
     */
    private function action($action, $name): string
    {
        return $this->name . ' lance ' . $action . ' sur ' . $name;
    }
}