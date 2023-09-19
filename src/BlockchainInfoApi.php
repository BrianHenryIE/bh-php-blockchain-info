<?php

/**
 * "Please limit your queries to a maximum of 1 every 10 seconds"
 *
 * @see https://www.blockchain.com/api/blockchain_api
 * @see https://www.blockchain.com/api/q
 *
 */

namespace BrianHenryIE\BlockchainInfo;

use BrianHenryIE\BlockchainInfo\Model\RawAddress;
use JsonMapper\Enums\TextNotation;
use JsonMapper\JsonMapperInterface;
use JsonMapper\Middleware\CaseConversion;
use JsonMapper\JsonMapperFactory;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;

class BlockchainInfoApi
{
    /**
     * PSR HTTP implementation.
     */
    protected RequestFactoryInterface $requestFactory;

    /**
     * PSR HTTP client for making requests.
     */
    protected ClientInterface $client;

    protected JsonMapperInterface $mapper;

    /**
     * Constructor
     *
     * @param RequestFactoryInterface $requestFactory
     * @param ClientInterface $client A PSR HTTP client.
     */
    public function __construct(RequestFactoryInterface $requestFactory, ClientInterface $client)
    {
        $this->client = $client;
        $this->requestFactory = $requestFactory;

        $this->mapper = (new JsonMapperFactory())->bestFit();
        $this->mapper->push(new CaseConversion(TextNotation::UNDERSCORE(), TextNotation::CAMEL_CASE()));
    }

    /**
     *
     * @param string $btcAddress
     * @param bool   $confirmed
     *
     * @return string
     * @throws \Exception
     *
     */
    public function getReceivedByAddress(string $btcAddress, bool $confirmed): string
    {
        $minimumConfirmations = $confirmed ? 1 : 0;

        $url = "https://blockchain.info/q/getreceivedbyaddress/{$btcAddress}?confirmations={$minimumConfirmations}";

        $request = $this->requestFactory->createRequest('GET', $url);

        $response = $this->client->sendRequest($request);

        return $response->getBody();
    }

	/**
	 * Divide by 100000000
	 *
	 * @param string $btcAddress
	 * @param int $numberOfConfirmations
	 *
	 * @return int
	 * @throws \Psr\Http\Client\ClientExceptionInterface
	 */
    public function getAddressBalance(string $btcAddress, int $numberOfConfirmations): int
    {
        $url = "https://blockchain.info/q/addressbalance/{$btcAddress}?confirmations={$numberOfConfirmations}";

        $request = $this->requestFactory->createRequest('GET', $url);

        $response = $this->client->sendRequest($request);

        $balance = $response->getBody();

        return (int) $balance;
    }

    /**
     * @param string $btcAddress
     *
     * @throws \Exception
     */
    public function getRawAddr(string $btcAddress): RawAddress
    {
        $url = "https://blockchain.info/rawaddr/$btcAddress";

        $request = $this->requestFactory->createRequest('GET', $url);

        $response = $this->client->sendRequest($request);

        return $this->mapper->mapToClassFromString($response->getBody(), RawAddress::class);
    }

    /**
     * @throws \Exception
     */
    public function getBlockCount(): int
    {
        $blockchainHeightUrl = 'https://blockchain.info/q/getblockcount';

        $request = $this->requestFactory->createRequest('GET', $blockchainHeightUrl);

        $response = $this->client->sendRequest($request);

        return (int) $response->getBody();
    }
}
