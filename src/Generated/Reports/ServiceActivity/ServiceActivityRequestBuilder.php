<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\ServiceActivity;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForDesktopMailByReadEmailWithInclus_5945eaac\GetActiveUserMetricsForDesktopMailByReadEmailWithInclus_5b9e9045;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForEmailByModernAuthenticationWithI_6b571bd0\GetActiveUserMetricsForEmailByModernAuthenticationWithI_e7b9a794;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForExcelWebWithInclusiveIntervalSta_be61b996\GetActiveUserMetricsForExcelWebWithInclusiveIntervalSta_6c807248;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForiOSOrAndroidMailByReadEmailWithI_bdccfb21\GetActiveUserMetricsForiOSOrAndroidMailByReadEmailWithI_893e6dda;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForOneNoteWebWithInclusiveIntervalS_db52a6d7\GetActiveUserMetricsForOneNoteWebWithInclusiveIntervalS_ef11f160;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForOutlookMacByReadEmailWithInclusi_d04e48af\GetActiveUserMetricsForOutlookMacByReadEmailWithInclusi_20a78430;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForOutlookMobileByReadEmailWithIncl_1fea4fde\GetActiveUserMetricsForOutlookMobileByReadEmailWithIncl_f171d6ab;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_794c6e2c\GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_a0e1b58b;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForOutlookWebByReadEmailWithInclusi_5ead6959\GetActiveUserMetricsForOutlookWebByReadEmailWithInclusi_6281bdcc;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForPowerPointWebWithInclusiveInterv_bc926148\GetActiveUserMetricsForPowerPointWebWithInclusiveInterv_bfc1634d;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_ef4a532b\GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_0007dda1;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForWordWebWithInclusiveIntervalStar_62c98614\GetActiveUserMetricsForWordWebWithInclusiveIntervalStar_c945cf1f;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetAudioStreamQoEMetricsForTeamsWithInclusiveIntervalSt_f1693cb9\GetAudioStreamQoEMetricsForTeamsWithInclusiveIntervalSt_a5e32600;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetAudioStreamsOverUdpMetricsForTeamsWithInclusiveInter_127ff88c\GetAudioStreamsOverUdpMetricsForTeamsWithInclusiveInter_851a0155;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetConnectivityMetricsForExchangeWithInclusiveIntervalS_d0ab0d41\GetConnectivityMetricsForExchangeWithInclusiveIntervalS_4fa81f92;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMessageVolumeMetricsForEmailDeliveryWithInclusiveInt_66d025d4\GetMessageVolumeMetricsForEmailDeliveryWithInclusiveInt_44aeed6e;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMessageVolumeMetricsForTeamsChatWithInclusiveInterva_8de3be15\GetMessageVolumeMetricsForTeamsChatWithInclusiveInterva_d9090a5d;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForConditionalAccessBlockedSignInWithInclusiv_e85fac73\GetMetricsForConditionalAccessBlockedSignInWithInclusiv_fa3607ff;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForConditionalAccessCompliantDevicesSignInSuc_9ac34f05\GetMetricsForConditionalAccessCompliantDevicesSignInSuc_b4c9f817;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForConditionalAccessManagedDevicesSignInSucce_89ba2a58\GetMetricsForConditionalAccessManagedDevicesSignInSucce_43a2c9af;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_bd23993d\GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_1b74a88d;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForMfaSignInSuccessWithInclusiveIntervalStart_c2f09e85\GetMetricsForMfaSignInSuccessWithInclusiveIntervalStart_4142ff1d;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessInternetAppPolicyAllowedAppsW_d7521871\GetMetricsForNetworkAccessInternetAppPolicyAllowedAppsW_0e10ab93;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessInternetAppPolicyAllowedUsers_381a8906\GetMetricsForNetworkAccessInternetAppPolicyAllowedUsers_6a466ef8;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_d8ece54f\GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_cae8fb28;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessInternetAppPolicyBlockedUsers_0fa5a220\GetMetricsForNetworkAccessInternetAppPolicyBlockedUsers_9c9abc7b;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessPrivateAppsAllowedByConnector_1781beab\GetMetricsForNetworkAccessPrivateAppsAllowedByConnector_0a5d642c;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_90998d4c\GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_9a890ed9;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_b135c036\GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_c6ea319b;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessPrivateAppUsersBlockedByConne_28fa2da6\GetMetricsForNetworkAccessPrivateAppUsersBlockedByConne_f95758e4;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessRemoteNetworkBranchesAliveWit_7dda565d\GetMetricsForNetworkAccessRemoteNetworkBranchesAliveWit_ec86957b;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessRemoteNetworkBranchesBGPConne_5d6ba6d6\GetMetricsForNetworkAccessRemoteNetworkBranchesBGPConne_56cfc3e2;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessRemoteNetworkBranchesBGPDisco_f79433d8\GetMetricsForNetworkAccessRemoteNetworkBranchesBGPDisco_b4f7d513;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessRemoteNetworkBranchesTunnelCo_9122597f\GetMetricsForNetworkAccessRemoteNetworkBranchesTunnelCo_e00496c4;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessRemoteNetworkBranchesTunnelDi_4fdcb75d\GetMetricsForNetworkAccessRemoteNetworkBranchesTunnelDi_ddcdd257;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForSamlSignInSuccessWithInclusiveIntervalStar_a0a21818\GetMetricsForSamlSignInSuccessWithInclusiveIntervalStar_27b1de02;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetUsageMetricsForTeamsByLaunchWithInclusiveIntervalSta_215ae664\GetUsageMetricsForTeamsByLaunchWithInclusiveIntervalSta_07e39c32;
use Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetUsageMetricsForTeamsByMeetingsJoinedWithInclusiveInt_2ed1bee3\GetUsageMetricsForTeamsByMeetingsJoinedWithInclusiveInt_39de444f;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the serviceActivity property of the microsoft.graph.reportRoot entity.
*/
class ServiceActivityRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ServiceActivityRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/serviceActivity');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property serviceActivity for reports
     * @param ServiceActivityRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ServiceActivityRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Reports that relate to tenant-level authentication activities in Microsoft Entra.
     * @param ServiceActivityRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ServiceActivity|null>
     * @throws Exception
    */
    public function get(?ServiceActivityRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ServiceActivity::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForDesktopMailByReadEmail method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForDesktopMailByReadEmailWithInclus_5b9e9045
    */
    public function getActiveUserMetricsForDesktopMailByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForDesktopMailByReadEmailWithInclus_5b9e9045 {
        return new GetActiveUserMetricsForDesktopMailByReadEmailWithInclus_5b9e9045($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForEmailByModernAuthentication method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForEmailByModernAuthenticationWithI_e7b9a794
    */
    public function getActiveUserMetricsForEmailByModernAuthenticationWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForEmailByModernAuthenticationWithI_e7b9a794 {
        return new GetActiveUserMetricsForEmailByModernAuthenticationWithI_e7b9a794($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForExcelWeb method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForExcelWebWithInclusiveIntervalSta_6c807248
    */
    public function getActiveUserMetricsForExcelWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForExcelWebWithInclusiveIntervalSta_6c807248 {
        return new GetActiveUserMetricsForExcelWebWithInclusiveIntervalSta_6c807248($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForiOSOrAndroidMailByReadEmail method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForiOSOrAndroidMailByReadEmailWithI_893e6dda
    */
    public function getActiveUserMetricsForiOSOrAndroidMailByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForiOSOrAndroidMailByReadEmailWithI_893e6dda {
        return new GetActiveUserMetricsForiOSOrAndroidMailByReadEmailWithI_893e6dda($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForOneNoteWeb method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForOneNoteWebWithInclusiveIntervalS_ef11f160
    */
    public function getActiveUserMetricsForOneNoteWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForOneNoteWebWithInclusiveIntervalS_ef11f160 {
        return new GetActiveUserMetricsForOneNoteWebWithInclusiveIntervalS_ef11f160($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForOutlookMacByReadEmail method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForOutlookMacByReadEmailWithInclusi_20a78430
    */
    public function getActiveUserMetricsForOutlookMacByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForOutlookMacByReadEmailWithInclusi_20a78430 {
        return new GetActiveUserMetricsForOutlookMacByReadEmailWithInclusi_20a78430($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForOutlookMobileByReadEmail method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForOutlookMobileByReadEmailWithIncl_f171d6ab
    */
    public function getActiveUserMetricsForOutlookMobileByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForOutlookMobileByReadEmailWithIncl_f171d6ab {
        return new GetActiveUserMetricsForOutlookMobileByReadEmailWithIncl_f171d6ab($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForOutlookWebByAppOpening method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_a0e1b58b
    */
    public function getActiveUserMetricsForOutlookWebByAppOpeningWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_a0e1b58b {
        return new GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_a0e1b58b($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForOutlookWebByReadEmail method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForOutlookWebByReadEmailWithInclusi_6281bdcc
    */
    public function getActiveUserMetricsForOutlookWebByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForOutlookWebByReadEmailWithInclusi_6281bdcc {
        return new GetActiveUserMetricsForOutlookWebByReadEmailWithInclusi_6281bdcc($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForPowerPointWeb method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForPowerPointWebWithInclusiveInterv_bfc1634d
    */
    public function getActiveUserMetricsForPowerPointWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForPowerPointWebWithInclusiveInterv_bfc1634d {
        return new GetActiveUserMetricsForPowerPointWebWithInclusiveInterv_bfc1634d($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForVisioWeb method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_0007dda1
    */
    public function getActiveUserMetricsForVisioWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_0007dda1 {
        return new GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_0007dda1($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForWordWeb method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForWordWebWithInclusiveIntervalStar_c945cf1f
    */
    public function getActiveUserMetricsForWordWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForWordWebWithInclusiveIntervalStar_c945cf1f {
        return new GetActiveUserMetricsForWordWebWithInclusiveIntervalStar_c945cf1f($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getAudioStreamQoEMetricsForTeams method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetAudioStreamQoEMetricsForTeamsWithInclusiveIntervalSt_a5e32600
    */
    public function getAudioStreamQoEMetricsForTeamsWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetAudioStreamQoEMetricsForTeamsWithInclusiveIntervalSt_a5e32600 {
        return new GetAudioStreamQoEMetricsForTeamsWithInclusiveIntervalSt_a5e32600($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getAudioStreamsOverUdpMetricsForTeams method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetAudioStreamsOverUdpMetricsForTeamsWithInclusiveInter_851a0155
    */
    public function getAudioStreamsOverUdpMetricsForTeamsWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetAudioStreamsOverUdpMetricsForTeamsWithInclusiveInter_851a0155 {
        return new GetAudioStreamsOverUdpMetricsForTeamsWithInclusiveInter_851a0155($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getConnectivityMetricsForExchange method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetConnectivityMetricsForExchangeWithInclusiveIntervalS_4fa81f92
    */
    public function getConnectivityMetricsForExchangeWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetConnectivityMetricsForExchangeWithInclusiveIntervalS_4fa81f92 {
        return new GetConnectivityMetricsForExchangeWithInclusiveIntervalS_4fa81f92($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMessageVolumeMetricsForEmailDelivery method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMessageVolumeMetricsForEmailDeliveryWithInclusiveInt_44aeed6e
    */
    public function getMessageVolumeMetricsForEmailDeliveryWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMessageVolumeMetricsForEmailDeliveryWithInclusiveInt_44aeed6e {
        return new GetMessageVolumeMetricsForEmailDeliveryWithInclusiveInt_44aeed6e($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMessageVolumeMetricsForTeamsChat method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMessageVolumeMetricsForTeamsChatWithInclusiveInterva_d9090a5d
    */
    public function getMessageVolumeMetricsForTeamsChatWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMessageVolumeMetricsForTeamsChatWithInclusiveInterva_d9090a5d {
        return new GetMessageVolumeMetricsForTeamsChatWithInclusiveInterva_d9090a5d($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForConditionalAccessBlockedSignIn method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForConditionalAccessBlockedSignInWithInclusiv_fa3607ff
    */
    public function getMetricsForConditionalAccessBlockedSignInWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForConditionalAccessBlockedSignInWithInclusiv_fa3607ff {
        return new GetMetricsForConditionalAccessBlockedSignInWithInclusiv_fa3607ff($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForConditionalAccessCompliantDevicesSignInSuccess method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForConditionalAccessCompliantDevicesSignInSuc_b4c9f817
    */
    public function getMetricsForConditionalAccessCompliantDevicesSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForConditionalAccessCompliantDevicesSignInSuc_b4c9f817 {
        return new GetMetricsForConditionalAccessCompliantDevicesSignInSuc_b4c9f817($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForConditionalAccessManagedDevicesSignInSuccess method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForConditionalAccessManagedDevicesSignInSucce_43a2c9af
    */
    public function getMetricsForConditionalAccessManagedDevicesSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForConditionalAccessManagedDevicesSignInSucce_43a2c9af {
        return new GetMetricsForConditionalAccessManagedDevicesSignInSucce_43a2c9af($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForMfaSignInFailure method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_1b74a88d
    */
    public function getMetricsForMfaSignInFailureWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_1b74a88d {
        return new GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_1b74a88d($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForMfaSignInSuccess method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForMfaSignInSuccessWithInclusiveIntervalStart_4142ff1d
    */
    public function getMetricsForMfaSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForMfaSignInSuccessWithInclusiveIntervalStart_4142ff1d {
        return new GetMetricsForMfaSignInSuccessWithInclusiveIntervalStart_4142ff1d($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForNetworkAccessInternetAppPolicyAllowedApps method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForNetworkAccessInternetAppPolicyAllowedAppsW_0e10ab93
    */
    public function getMetricsForNetworkAccessInternetAppPolicyAllowedAppsWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForNetworkAccessInternetAppPolicyAllowedAppsW_0e10ab93 {
        return new GetMetricsForNetworkAccessInternetAppPolicyAllowedAppsW_0e10ab93($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForNetworkAccessInternetAppPolicyAllowedUsers method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForNetworkAccessInternetAppPolicyAllowedUsers_6a466ef8
    */
    public function getMetricsForNetworkAccessInternetAppPolicyAllowedUsersWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForNetworkAccessInternetAppPolicyAllowedUsers_6a466ef8 {
        return new GetMetricsForNetworkAccessInternetAppPolicyAllowedUsers_6a466ef8($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForNetworkAccessInternetAppPolicyBlockedApps method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_cae8fb28
    */
    public function getMetricsForNetworkAccessInternetAppPolicyBlockedAppsWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_cae8fb28 {
        return new GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_cae8fb28($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForNetworkAccessInternetAppPolicyBlockedUsers method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForNetworkAccessInternetAppPolicyBlockedUsers_9c9abc7b
    */
    public function getMetricsForNetworkAccessInternetAppPolicyBlockedUsersWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForNetworkAccessInternetAppPolicyBlockedUsers_9c9abc7b {
        return new GetMetricsForNetworkAccessInternetAppPolicyBlockedUsers_9c9abc7b($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForNetworkAccessPrivateAppsAllowedByConnector method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForNetworkAccessPrivateAppsAllowedByConnector_0a5d642c
    */
    public function getMetricsForNetworkAccessPrivateAppsAllowedByConnectorWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForNetworkAccessPrivateAppsAllowedByConnector_0a5d642c {
        return new GetMetricsForNetworkAccessPrivateAppsAllowedByConnector_0a5d642c($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForNetworkAccessPrivateAppsBlockedByConnector method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_9a890ed9
    */
    public function getMetricsForNetworkAccessPrivateAppsBlockedByConnectorWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_9a890ed9 {
        return new GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_9a890ed9($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForNetworkAccessPrivateAppUsersAllowedByConnector method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_c6ea319b
    */
    public function getMetricsForNetworkAccessPrivateAppUsersAllowedByConnectorWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_c6ea319b {
        return new GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_c6ea319b($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForNetworkAccessPrivateAppUsersBlockedByConnector method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForNetworkAccessPrivateAppUsersBlockedByConne_f95758e4
    */
    public function getMetricsForNetworkAccessPrivateAppUsersBlockedByConnectorWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForNetworkAccessPrivateAppUsersBlockedByConne_f95758e4 {
        return new GetMetricsForNetworkAccessPrivateAppUsersBlockedByConne_f95758e4($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForNetworkAccessRemoteNetworkBranchesAlive method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForNetworkAccessRemoteNetworkBranchesAliveWit_ec86957b
    */
    public function getMetricsForNetworkAccessRemoteNetworkBranchesAliveWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForNetworkAccessRemoteNetworkBranchesAliveWit_ec86957b {
        return new GetMetricsForNetworkAccessRemoteNetworkBranchesAliveWit_ec86957b($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForNetworkAccessRemoteNetworkBranchesBGPConnected method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForNetworkAccessRemoteNetworkBranchesBGPConne_56cfc3e2
    */
    public function getMetricsForNetworkAccessRemoteNetworkBranchesBGPConnectedWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForNetworkAccessRemoteNetworkBranchesBGPConne_56cfc3e2 {
        return new GetMetricsForNetworkAccessRemoteNetworkBranchesBGPConne_56cfc3e2($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForNetworkAccessRemoteNetworkBranchesBGPDisconnected method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForNetworkAccessRemoteNetworkBranchesBGPDisco_b4f7d513
    */
    public function getMetricsForNetworkAccessRemoteNetworkBranchesBGPDisconnectedWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForNetworkAccessRemoteNetworkBranchesBGPDisco_b4f7d513 {
        return new GetMetricsForNetworkAccessRemoteNetworkBranchesBGPDisco_b4f7d513($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForNetworkAccessRemoteNetworkBranchesTunnelConnected method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForNetworkAccessRemoteNetworkBranchesTunnelCo_e00496c4
    */
    public function getMetricsForNetworkAccessRemoteNetworkBranchesTunnelConnectedWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForNetworkAccessRemoteNetworkBranchesTunnelCo_e00496c4 {
        return new GetMetricsForNetworkAccessRemoteNetworkBranchesTunnelCo_e00496c4($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForNetworkAccessRemoteNetworkBranchesTunnelDisconnected method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForNetworkAccessRemoteNetworkBranchesTunnelDi_ddcdd257
    */
    public function getMetricsForNetworkAccessRemoteNetworkBranchesTunnelDisconnectedWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForNetworkAccessRemoteNetworkBranchesTunnelDi_ddcdd257 {
        return new GetMetricsForNetworkAccessRemoteNetworkBranchesTunnelDi_ddcdd257($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForSamlSignInSuccess method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForSamlSignInSuccessWithInclusiveIntervalStar_27b1de02
    */
    public function getMetricsForSamlSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForSamlSignInSuccessWithInclusiveIntervalStar_27b1de02 {
        return new GetMetricsForSamlSignInSuccessWithInclusiveIntervalStar_27b1de02($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getUsageMetricsForTeamsByLaunch method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetUsageMetricsForTeamsByLaunchWithInclusiveIntervalSta_07e39c32
    */
    public function getUsageMetricsForTeamsByLaunchWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetUsageMetricsForTeamsByLaunchWithInclusiveIntervalSta_07e39c32 {
        return new GetUsageMetricsForTeamsByLaunchWithInclusiveIntervalSta_07e39c32($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getUsageMetricsForTeamsByMeetingsJoined method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetUsageMetricsForTeamsByMeetingsJoinedWithInclusiveInt_39de444f
    */
    public function getUsageMetricsForTeamsByMeetingsJoinedWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetUsageMetricsForTeamsByMeetingsJoinedWithInclusiveInt_39de444f {
        return new GetUsageMetricsForTeamsByMeetingsJoinedWithInclusiveInt_39de444f($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Update the navigation property serviceActivity in reports
     * @param ServiceActivity $body The request body
     * @param ServiceActivityRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ServiceActivity|null>
     * @throws Exception
    */
    public function patch(ServiceActivity $body, ?ServiceActivityRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ServiceActivity::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property serviceActivity for reports
     * @param ServiceActivityRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ServiceActivityRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Reports that relate to tenant-level authentication activities in Microsoft Entra.
     * @param ServiceActivityRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ServiceActivityRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Update the navigation property serviceActivity in reports
     * @param ServiceActivity $body The request body
     * @param ServiceActivityRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ServiceActivity $body, ?ServiceActivityRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ServiceActivityRequestBuilder
    */
    public function withUrl(string $rawUrl): ServiceActivityRequestBuilder {
        return new ServiceActivityRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
