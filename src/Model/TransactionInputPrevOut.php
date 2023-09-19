<?php

namespace BrianHenryIE\BlockchainInfo\Model;

class TransactionInputPrevOut
{
    protected string $addr;
    protected int $n;
    protected string $script;
    /** @var TransactionSpendingOutpoint[] */
    protected array $spendingOutpoints;


    protected bool $spent;
    protected int $txIndex;
    protected int $type;
    protected int $value;

    /**
     * @return string
     */
    public function getAddr(): string
    {
        return $this->addr;
    }

    /**
     * @param string $addr
     */
    public function setAddr(string $addr): void
    {
        $this->addr = $addr;
    }

    /**
     * @return int
     */
    public function getN(): int
    {
        return $this->n;
    }

    /**
     * @param int $n
     */
    public function setN(int $n): void
    {
        $this->n = $n;
    }

    /**
     * @return string
     */
    public function getScript(): string
    {
        return $this->script;
    }

    /**
     * @param string $script
     */
    public function setScript(string $script): void
    {
        $this->script = $script;
    }

    /**
     * @return TransactionSpendingOutpoint[]
     */
    public function getSpendingOutpoints(): array
    {
        return $this->spendingOutpoints;
    }

    /**
     * @param TransactionSpendingOutpoint[] $spendingOutpoints
     */
    public function setSpendingOutpoints(array $spendingOutpoints): void
    {
        $this->spendingOutpoints = $spendingOutpoints;
    }

    /**
     * @return bool
     */
    public function isSpent(): bool
    {
        return $this->spent;
    }

    /**
     * @param bool $spent
     */
    public function setSpent(bool $spent): void
    {
        $this->spent = $spent;
    }

    /**
     * @return int
     */
    public function getTxIndex(): int
    {
        return $this->txIndex;
    }

    /**
     * @param int $txIndex
     */
    public function setTxIndex(int $txIndex): void
    {
        $this->txIndex = $txIndex;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(int $value): void
    {
        $this->value = $value;
    }
}
