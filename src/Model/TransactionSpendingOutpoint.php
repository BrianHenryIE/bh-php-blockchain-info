<?php

namespace BrianHenryIE\BlockchainInfo\Model;

class TransactionSpendingOutpoint
{
    protected int $txIndex;
    protected int $n;

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
}
