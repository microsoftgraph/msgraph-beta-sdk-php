<?php

namespace Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Models\ServiceActivity;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetActiveUserMetricsForDesktopMailByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetActiveUserMetricsForDesktopMailByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetActiveUserMetricsForEmailByModernAuthenticationWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetActiveUserMetricsForEmailByModernAuthenticationWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetActiveUserMetricsForExcelWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetActiveUserMetricsForExcelWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetActiveUserMetricsForiOSOrAndroidMailByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetActiveUserMetricsForiOSOrAndroidMailByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetActiveUserMetricsForOneNoteWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetActiveUserMetricsForOneNoteWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetActiveUserMetricsForOutlookMacByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetActiveUserMetricsForOutlookMacByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetActiveUserMetricsForOutlookMobileByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetActiveUserMetricsForOutlookMobileByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetActiveUserMetricsForOutlookWebByAppOpeningWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetActiveUserMetricsForOutlookWebByAppOpeningWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetActiveUserMetricsForOutlookWebByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetActiveUserMetricsForOutlookWebByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetActiveUserMetricsForPowerPointWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetActiveUserMetricsForPowerPointWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetActiveUserMetricsForVisioWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetActiveUserMetricsForVisioWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetActiveUserMetricsForWordWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetActiveUserMetricsForWordWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetAudioStreamQoEMetricsForTeamsWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetAudioStreamQoEMetricsForTeamsWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetAudioStreamsOverUdpMetricsForTeamsWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetAudioStreamsOverUdpMetricsForTeamsWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetConnectivityMetricsForExchangeWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetConnectivityMetricsForExchangeWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetMessageVolumeMetricsForEmailDeliveryWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetMessageVolumeMetricsForEmailDeliveryWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetMessageVolumeMetricsForTeamsChatWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetMessageVolumeMetricsForTeamsChatWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetMetricsForConditionalAccessBlockedSignInWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetMetricsForConditionalAccessBlockedSignInWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetMetricsForConditionalAccessCompliantDevicesSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetMetricsForConditionalAccessCompliantDevicesSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetMetricsForConditionalAccessManagedDevicesSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetMetricsForConditionalAccessManagedDevicesSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetMetricsForMfaSignInFailureWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetMetricsForMfaSignInFailureWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetMetricsForMfaSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetMetricsForMfaSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetMetricsForSamlSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetMetricsForSamlSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetUsageMetricsForTeamsByLaunchWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetUsageMetricsForTeamsByLaunchWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetUsageMetricsForTeamsByMeetingsJoinedWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes\GetUsageMetricsForTeamsByMeetingsJoinedWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder;
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
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/serviceActivity{?%24expand,%24select}');
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
     * @return GetActiveUserMetricsForDesktopMailByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getActiveUserMetricsForDesktopMailByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForDesktopMailByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetActiveUserMetricsForDesktopMailByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForEmailByModernAuthentication method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForEmailByModernAuthenticationWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getActiveUserMetricsForEmailByModernAuthenticationWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForEmailByModernAuthenticationWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetActiveUserMetricsForEmailByModernAuthenticationWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForExcelWeb method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForExcelWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getActiveUserMetricsForExcelWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForExcelWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetActiveUserMetricsForExcelWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForiOSOrAndroidMailByReadEmail method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForiOSOrAndroidMailByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getActiveUserMetricsForiOSOrAndroidMailByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForiOSOrAndroidMailByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetActiveUserMetricsForiOSOrAndroidMailByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForOneNoteWeb method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForOneNoteWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getActiveUserMetricsForOneNoteWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForOneNoteWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetActiveUserMetricsForOneNoteWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForOutlookMacByReadEmail method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForOutlookMacByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getActiveUserMetricsForOutlookMacByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForOutlookMacByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetActiveUserMetricsForOutlookMacByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForOutlookMobileByReadEmail method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForOutlookMobileByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getActiveUserMetricsForOutlookMobileByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForOutlookMobileByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetActiveUserMetricsForOutlookMobileByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForOutlookWebByAppOpening method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForOutlookWebByAppOpeningWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getActiveUserMetricsForOutlookWebByAppOpeningWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForOutlookWebByAppOpeningWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetActiveUserMetricsForOutlookWebByAppOpeningWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForOutlookWebByReadEmail method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForOutlookWebByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getActiveUserMetricsForOutlookWebByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForOutlookWebByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetActiveUserMetricsForOutlookWebByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForPowerPointWeb method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForPowerPointWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getActiveUserMetricsForPowerPointWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForPowerPointWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetActiveUserMetricsForPowerPointWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForVisioWeb method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForVisioWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getActiveUserMetricsForVisioWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForVisioWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetActiveUserMetricsForVisioWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getActiveUserMetricsForWordWeb method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetActiveUserMetricsForWordWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getActiveUserMetricsForWordWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetActiveUserMetricsForWordWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetActiveUserMetricsForWordWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getAudioStreamQoEMetricsForTeams method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetAudioStreamQoEMetricsForTeamsWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getAudioStreamQoEMetricsForTeamsWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetAudioStreamQoEMetricsForTeamsWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetAudioStreamQoEMetricsForTeamsWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getAudioStreamsOverUdpMetricsForTeams method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetAudioStreamsOverUdpMetricsForTeamsWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getAudioStreamsOverUdpMetricsForTeamsWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetAudioStreamsOverUdpMetricsForTeamsWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetAudioStreamsOverUdpMetricsForTeamsWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getConnectivityMetricsForExchange method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetConnectivityMetricsForExchangeWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getConnectivityMetricsForExchangeWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetConnectivityMetricsForExchangeWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetConnectivityMetricsForExchangeWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMessageVolumeMetricsForEmailDelivery method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMessageVolumeMetricsForEmailDeliveryWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getMessageVolumeMetricsForEmailDeliveryWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMessageVolumeMetricsForEmailDeliveryWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetMessageVolumeMetricsForEmailDeliveryWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMessageVolumeMetricsForTeamsChat method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMessageVolumeMetricsForTeamsChatWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getMessageVolumeMetricsForTeamsChatWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMessageVolumeMetricsForTeamsChatWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetMessageVolumeMetricsForTeamsChatWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForConditionalAccessBlockedSignIn method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForConditionalAccessBlockedSignInWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getMetricsForConditionalAccessBlockedSignInWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForConditionalAccessBlockedSignInWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetMetricsForConditionalAccessBlockedSignInWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForConditionalAccessCompliantDevicesSignInSuccess method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForConditionalAccessCompliantDevicesSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getMetricsForConditionalAccessCompliantDevicesSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForConditionalAccessCompliantDevicesSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetMetricsForConditionalAccessCompliantDevicesSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForConditionalAccessManagedDevicesSignInSuccess method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForConditionalAccessManagedDevicesSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getMetricsForConditionalAccessManagedDevicesSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForConditionalAccessManagedDevicesSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetMetricsForConditionalAccessManagedDevicesSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForMfaSignInFailure method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForMfaSignInFailureWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getMetricsForMfaSignInFailureWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForMfaSignInFailureWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetMetricsForMfaSignInFailureWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForMfaSignInSuccess method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForMfaSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getMetricsForMfaSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForMfaSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetMetricsForMfaSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getMetricsForSamlSignInSuccess method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetMetricsForSamlSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getMetricsForSamlSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetMetricsForSamlSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetMetricsForSamlSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getUsageMetricsForTeamsByLaunch method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetUsageMetricsForTeamsByLaunchWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getUsageMetricsForTeamsByLaunchWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetUsageMetricsForTeamsByLaunchWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetUsageMetricsForTeamsByLaunchWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
    }

    /**
     * Provides operations to call the getUsageMetricsForTeamsByMeetingsJoined method.
     * @param DateTime $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
     * @return GetUsageMetricsForTeamsByMeetingsJoinedWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
    */
    public function getUsageMetricsForTeamsByMeetingsJoinedWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes(DateTime $exclusiveIntervalEndDateTime, DateTime $inclusiveIntervalStartDateTime): GetUsageMetricsForTeamsByMeetingsJoinedWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder {
        return new GetUsageMetricsForTeamsByMeetingsJoinedWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder($this->pathParameters, $this->requestAdapter, $exclusiveIntervalEndDateTime, $inclusiveIntervalStartDateTime);
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
