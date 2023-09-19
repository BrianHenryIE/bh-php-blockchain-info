<?php

namespace BrianHenryIE\BlockchainInfo\Model;

class TransactionOut
{
    protected int $type;
    protected bool $spent;
    protected int $value;

    /** @var TransactionSpendingOutpoint[] */
    protected array $spendingOutpoints;

    protected int $n;
    protected int $txIndex;
    protected string $script;
    protected string $addr;

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
}
