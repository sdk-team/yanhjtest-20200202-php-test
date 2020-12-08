<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\YanhjTest\V20200101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\YanhjTest\V20200101\Models\GetVersionRequest;
use AlibabaCloud\SDK\YanhjTest\V20200101\Models\GetVersionResponse;
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
     * @param GetVersionRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetVersionResponse
     */
    public function getVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetVersionResponse::fromMap($this->doRPCRequest('GetVersion', '2020-01-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetVersionRequest $request
     *
     * @return GetVersionResponse
     */
    public function getVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVersionWithOptions($request, $runtime);
    }
}
