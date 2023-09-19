<?php

/**
 * @see https://blockchain.info/rawaddr/<<address>>
 */

namespace BrianHenryIE\BlockchainInfo\Model;

class RawAddress
{
    protected string $hash160;
    protected string $address;
    protected int $nTx;
    protected int $nUnredeemed;
    protected int $totalReceived;
    protected int $totalSent;
    protected int $finalBalance;

    /** @var Transaction[] */
    protected array $txs = array();

    /**
     * @return string
     */
    public function getHash160(): string
    {
        return $this->hash160;
    }

    /**
     * @param string $hash160
     */
    public function setHash160(string $hash160): void
    {
        $this->hash160 = $hash160;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return int
     */
    public function getNTx(): int
    {
        return $this->nTx;
    }

    /**
     * @param int $nTx
     */
    public function setNTx(int $nTx): void
    {
        $this->nTx = $nTx;
    }

    /**
     * @return int
     */
    public function getNUnredeemed(): int
    {
        return $this->nUnredeemed;
    }

    /**
     * @param int $nUnredeemed
     */
    public function setNUnredeemed(int $nUnredeemed): void
    {
        $this->nUnredeemed = $nUnredeemed;
    }

    /**
     * @return int
     */
    public function getTotalReceived(): int
    {
        return $this->totalReceived;
    }

    /**
     * @param int $totalReceived
     */
    public function setTotalReceived(int $totalReceived): void
    {
        $this->totalReceived = $totalReceived;
    }

    /**
     * @return int
     */
    public function getTotalSent(): int
    {
        return $this->totalSent;
    }

    /**
     * @param int $totalSent
     */
    public function setTotalSent(int $totalSent): void
    {
        $this->totalSent = $totalSent;
    }

    /**
     * @return int
     */
    public function getFinalBalance(): int
    {
        return $this->finalBalance;
    }

    /**
     * @param int $finalBalance
     */
    public function setFinalBalance(int $finalBalance): void
    {
        $this->finalBalance = $finalBalance;
    }

    /**
     * @return Transaction[]
     */
    public function getTxs(): array
    {
        return $this->txs;
    }

    /**
     * @param Transaction[] $txs
     */
    public function setTxs(array $txs): void
    {
        $this->txs = $txs;
    }
}
