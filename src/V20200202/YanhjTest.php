<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\YanhjTest\V20200202;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\YanhjTest\V20200202\Models\GetAllProductRequest;
use AlibabaCloud\SDK\YanhjTest\V20200202\Models\GetAllProductResponse;
use AlibabaCloud\SDK\YanhjTest\V20200202\Models\GetProductByNameRequest;
use AlibabaCloud\SDK\YanhjTest\V20200202\Models\GetProductByNameResponse;
use AlibabaCloud\SDK\YanhjTest\V20200202\Models\SendCommondResponse;
use AlibabaCloud\SDK\YanhjTest\V20200202\Models\UpdateApiResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

/**
 * @internal
 * @coversNothing
 */
class YanhjTest extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('yanhjtest', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return UpdateApiResponse
     */
    public function updateApiWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return UpdateApiResponse::fromMap($this->doRPCRequest('UpdateApi', '2020-02-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return UpdateApiResponse
     */
    public function updateApi()
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApiWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return SendCommondResponse
     */
    public function sendCommondWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return SendCommondResponse::fromMap($this->doRPCRequest('SendCommond', '2020-02-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return SendCommondResponse
     */
    public function sendCommond()
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendCommondWithOptions($runtime);
    }

    /**
     * @param GetAllProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAllProductResponse
     */
    public function getAllProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAllProductResponse::fromMap($this->doRPCRequest('GetAllProduct', '2020-02-02', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAllProductRequest $request
     *
     * @return GetAllProductResponse
     */
    public function getAllProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAllProductWithOptions($request, $runtime);
    }

    /**
     * @param GetProductByNameRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetProductByNameResponse
     */
    public function getProductByNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetProductByNameResponse::fromMap($this->doRPCRequest('GetProductByName', '2020-02-02', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetProductByNameRequest $request
     *
     * @return GetProductByNameResponse
     */
    public function getProductByName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProductByNameWithOptions($request, $runtime);
    }
}
