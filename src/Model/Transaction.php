<?php

namespace BrianHenryIE\BlockchainInfo\Model;

class Transaction
{
    protected string $hash;
    protected int $ver;
    protected int $vinSz;
    protected int $voutSz;
    protected int $size;
    protected int $weight;
    protected int $fee;
    protected string $relayedBy;
    protected int $lockTime;
    protected int $txIndex;
    protected bool $doubleSpend;
    protected int $time;
    protected int $blockIndex;
    protected int $blockHeight;

    /** @var TransactionInput[]  */
    protected array $inputs;

    /** @var TransactionOut[]  */
    protected array $out;

    protected int $result;
    protected int $balance;

    /**
     * @return string
     */
    public function getHash(): string
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     */
    public function setHash(string $hash): void
    {
        $this->hash = $hash;
    }

    /**
     * @return int
     */
    public function getVer(): int
    {
        return $this->ver;
    }

    /**
     * @param int $ver
     */
    public function setVer(int $ver): void
    {
        $this->ver = $ver;
    }

    /**
     * @return int
     */
    public function getVinSz(): int
    {
        return $this->vinSz;
    }

    /**
     * @param int $vinSz
     */
    public function setVinSz(int $vinSz): void
    {
        $this->vinSz = $vinSz;
    }

    /**
     * @return int
     */
    public function getVoutSz(): int
    {
        return $this->voutSz;
    }

    /**
     * @param int $voutSz
     */
    public function setVoutSz(int $voutSz): void
    {
        $this->voutSz = $voutSz;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getFee(): int
    {
        return $this->fee;
    }

    /**
     * @param int $fee
     */
    public function setFee(int $fee): void
    {
        $this->fee = $fee;
    }

    /**
     * @return string
     */
    public function getRelayedBy(): string
    {
        return $this->relayedBy;
    }

    /**
     * @param string $relayedBy
     */
    public function setRelayedBy(string $relayedBy): void
    {
        $this->relayedBy = $relayedBy;
    }

    /**
     * @return int
     */
    public function getLockTime(): int
    {
        return $this->lockTime;
    }

    /**
     * @param int $lockTime
     */
    public function setLockTime(int $lockTime): void
    {
        $this->lockTime = $lockTime;
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
     * @return bool
     */
    public function isDoubleSpend(): bool
    {
        return $this->doubleSpend;
    }

    /**
     * @param bool $doubleSpend
     */
    public function setDoubleSpend(bool $doubleSpend): void
    {
        $this->doubleSpend = $doubleSpend;
    }

    /**
     * @return int
     */
    public function getTime(): int
    {
        return $this->time;
    }

    /**
     * @param int $time
     */
    public function setTime(int $time): void
    {
        $this->time = $time;
    }

    /**
     * @return int
     */
    public function getBlockIndex(): int
    {
        return $this->blockIndex;
    }

    /**
     * @param int $blockIndex
     */
    public function setBlockIndex(int $blockIndex): void
    {
        $this->blockIndex = $blockIndex;
    }

    /**
     * @return int
     */
    public function getBlockHeight(): int
    {
        return $this->blockHeight;
    }

    /**
     * @param int $blockHeight
     */
    public function setBlockHeight(int $blockHeight): void
    {
        $this->blockHeight = $blockHeight;
    }

    /**
     * @return TransactionInput[]
     */
    public function getInputs(): array
    {
        return $this->inputs;
    }

    /**
     * @param TransactionInput[] $inputs
     */
    public function setInputs(array $inputs): void
    {
        $this->inputs = $inputs;
    }

    /**
     * @return array
     */
    public function getOut(): array
    {
        return $this->out;
    }

    /**
     * @param array $out
     */
    public function setOut(array $out): void
    {
        $this->out = $out;
    }

    /**
     * @return int
     */
    public function getResult(): int
    {
        return $this->result;
    }

    /**
     * @param int $result
     */
    public function setResult(int $result): void
    {
        $this->result = $result;
    }

    /**
     * @return int
     */
    public function getBalance(): int
    {
        return $this->balance;
    }

    /**
     * @param int $balance
     */
    public function setBalance(int $balance): void
    {
        $this->balance = $balance;
    }
}
