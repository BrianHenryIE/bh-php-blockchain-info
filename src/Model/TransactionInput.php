<?php

namespace BrianHenryIE\BlockchainInfo\Model;

class TransactionInput
{
    protected int $sequence;
    protected string $witness;
    protected string $script;
    protected int $index;

    protected TransactionInputPrevOut $prevOut;

    /**
     * @return int
     */
    public function getSequence(): int
    {
        return $this->sequence;
    }

    /**
     * @param int $sequence
     */
    public function setSequence(int $sequence): void
    {
        $this->sequence = $sequence;
    }

    /**
     * @return string
     */
    public function getWitness(): string
    {
        return $this->witness;
    }

    /**
     * @param string $witness
     */
    public function setWitness(string $witness): void
    {
        $this->witness = $witness;
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
     * @return int
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * @param int $index
     */
    public function setIndex(int $index): void
    {
        $this->index = $index;
    }

    public function getPrevOut(): TransactionInputPrevOut
    {
        return $this->prevOut;
    }

    public function setPrevOut(TransactionInputPrevOut $prevOut): void
    {
        $this->prevOut = $prevOut;
    }
}
