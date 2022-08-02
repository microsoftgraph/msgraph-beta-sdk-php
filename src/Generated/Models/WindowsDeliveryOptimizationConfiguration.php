<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsDeliveryOptimizationConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var int|null $backgroundDownloadFromHttpDelayInSeconds Specifies number of seconds to delay an HTTP source in a background download that is allowed to use peer-to-peer. Valid values 0 to 4294967295
    */
    private ?int $backgroundDownloadFromHttpDelayInSeconds = null;
    
    /**
     * @var DeliveryOptimizationBandwidth|null $bandwidthMode Specifies foreground and background bandwidth usage using percentages, absolutes, or hours.
    */
    private ?DeliveryOptimizationBandwidth $bandwidthMode = null;
    
    /**
     * @var int|null $cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds Specifies number of seconds to delay a fall back from cache servers to an HTTP source for a background download. Valid values 0 to 2592000.
    */
    private ?int $cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds = null;
    
    /**
     * @var int|null $cacheServerForegroundDownloadFallbackToHttpDelayInSeconds Specifies number of seconds to delay a fall back from cache servers to an HTTP source for a foreground download. Valid values 0 to 2592000.​
    */
    private ?int $cacheServerForegroundDownloadFallbackToHttpDelayInSeconds = null;
    
    /**
     * @var array<string>|null $cacheServerHostNames Specifies cache servers host names.
    */
    private ?array $cacheServerHostNames = null;
    
    /**
     * @var WindowsDeliveryOptimizationMode|null $deliveryOptimizationMode Delivery optimization mode for peer distribution
    */
    private ?WindowsDeliveryOptimizationMode $deliveryOptimizationMode = null;
    
    /**
     * @var int|null $foregroundDownloadFromHttpDelayInSeconds Specifies number of seconds to delay an HTTP source in a foreground download that is allowed to use peer-to-peer (0-86400). Valid values 0 to 86400
    */
    private ?int $foregroundDownloadFromHttpDelayInSeconds = null;
    
    /**
     * @var DeliveryOptimizationGroupIdSource|null $groupIdSource Specifies to restrict peer selection to a specfic source.
    */
    private ?DeliveryOptimizationGroupIdSource $groupIdSource = null;
    
    /**
     * @var int|null $maximumCacheAgeInDays Specifies the maximum time in days that each file is held in the Delivery Optimization cache after downloading successfully (0-3650). Valid values 0 to 3650
    */
    private ?int $maximumCacheAgeInDays = null;
    
    /**
     * @var DeliveryOptimizationMaxCacheSize|null $maximumCacheSize Specifies the maximum cache size that Delivery Optimization either as a percentage or in GB.
    */
    private ?DeliveryOptimizationMaxCacheSize $maximumCacheSize = null;
    
    /**
     * @var int|null $minimumBatteryPercentageAllowedToUpload Specifies the minimum battery percentage to allow the device to upload data (0-100). Valid values 0 to 100
    */
    private ?int $minimumBatteryPercentageAllowedToUpload = null;
    
    /**
     * @var int|null $minimumDiskSizeAllowedToPeerInGigabytes Specifies the minimum disk size in GB to use Peer Caching (1-100000). Valid values 1 to 100000
    */
    private ?int $minimumDiskSizeAllowedToPeerInGigabytes = null;
    
    /**
     * @var int|null $minimumFileSizeToCacheInMegabytes Specifies the minimum content file size in MB enabled to use Peer Caching (1-100000). Valid values 1 to 100000
    */
    private ?int $minimumFileSizeToCacheInMegabytes = null;
    
    /**
     * @var int|null $minimumRamAllowedToPeerInGigabytes Specifies the minimum RAM size in GB to use Peer Caching (1-100000). Valid values 1 to 100000
    */
    private ?int $minimumRamAllowedToPeerInGigabytes = null;
    
    /**
     * @var string|null $modifyCacheLocation Specifies the drive that Delivery Optimization should use for its cache.
    */
    private ?string $modifyCacheLocation = null;
    
    /**
     * @var DeliveryOptimizationRestrictPeerSelectionByOptions|null $restrictPeerSelectionBy Values to restrict peer selection by.
    */
    private ?DeliveryOptimizationRestrictPeerSelectionByOptions $restrictPeerSelectionBy = null;
    
    /**
     * @var Enablement|null $vpnPeerCaching Possible values of a property
    */
    private ?Enablement $vpnPeerCaching = null;
    
    /**
     * Instantiates a new WindowsDeliveryOptimizationConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsDeliveryOptimizationConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsDeliveryOptimizationConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsDeliveryOptimizationConfiguration {
        return new WindowsDeliveryOptimizationConfiguration();
    }

    /**
     * Gets the backgroundDownloadFromHttpDelayInSeconds property value. Specifies number of seconds to delay an HTTP source in a background download that is allowed to use peer-to-peer. Valid values 0 to 4294967295
     * @return int|null
    */
    public function getBackgroundDownloadFromHttpDelayInSeconds(): ?int {
        return $this->backgroundDownloadFromHttpDelayInSeconds;
    }

    /**
     * Gets the bandwidthMode property value. Specifies foreground and background bandwidth usage using percentages, absolutes, or hours.
     * @return DeliveryOptimizationBandwidth|null
    */
    public function getBandwidthMode(): ?DeliveryOptimizationBandwidth {
        return $this->bandwidthMode;
    }

    /**
     * Gets the cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds property value. Specifies number of seconds to delay a fall back from cache servers to an HTTP source for a background download. Valid values 0 to 2592000.
     * @return int|null
    */
    public function getCacheServerBackgroundDownloadFallbackToHttpDelayInSeconds(): ?int {
        return $this->cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds;
    }

    /**
     * Gets the cacheServerForegroundDownloadFallbackToHttpDelayInSeconds property value. Specifies number of seconds to delay a fall back from cache servers to an HTTP source for a foreground download. Valid values 0 to 2592000.​
     * @return int|null
    */
    public function getCacheServerForegroundDownloadFallbackToHttpDelayInSeconds(): ?int {
        return $this->cacheServerForegroundDownloadFallbackToHttpDelayInSeconds;
    }

    /**
     * Gets the cacheServerHostNames property value. Specifies cache servers host names.
     * @return array<string>|null
    */
    public function getCacheServerHostNames(): ?array {
        return $this->cacheServerHostNames;
    }

    /**
     * Gets the deliveryOptimizationMode property value. Delivery optimization mode for peer distribution
     * @return WindowsDeliveryOptimizationMode|null
    */
    public function getDeliveryOptimizationMode(): ?WindowsDeliveryOptimizationMode {
        return $this->deliveryOptimizationMode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'backgroundDownloadFromHttpDelayInSeconds' => function (ParseNode $n) use ($o) { $o->setBackgroundDownloadFromHttpDelayInSeconds($n->getIntegerValue()); },
            'bandwidthMode' => function (ParseNode $n) use ($o) { $o->setBandwidthMode($n->getObjectValue(array(DeliveryOptimizationBandwidth::class, 'createFromDiscriminatorValue'))); },
            'cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds' => function (ParseNode $n) use ($o) { $o->setCacheServerBackgroundDownloadFallbackToHttpDelayInSeconds($n->getIntegerValue()); },
            'cacheServerForegroundDownloadFallbackToHttpDelayInSeconds' => function (ParseNode $n) use ($o) { $o->setCacheServerForegroundDownloadFallbackToHttpDelayInSeconds($n->getIntegerValue()); },
            'cacheServerHostNames' => function (ParseNode $n) use ($o) { $o->setCacheServerHostNames($n->getCollectionOfPrimitiveValues()); },
            'deliveryOptimizationMode' => function (ParseNode $n) use ($o) { $o->setDeliveryOptimizationMode($n->getEnumValue(WindowsDeliveryOptimizationMode::class)); },
            'foregroundDownloadFromHttpDelayInSeconds' => function (ParseNode $n) use ($o) { $o->setForegroundDownloadFromHttpDelayInSeconds($n->getIntegerValue()); },
            'groupIdSource' => function (ParseNode $n) use ($o) { $o->setGroupIdSource($n->getObjectValue(array(DeliveryOptimizationGroupIdSource::class, 'createFromDiscriminatorValue'))); },
            'maximumCacheAgeInDays' => function (ParseNode $n) use ($o) { $o->setMaximumCacheAgeInDays($n->getIntegerValue()); },
            'maximumCacheSize' => function (ParseNode $n) use ($o) { $o->setMaximumCacheSize($n->getObjectValue(array(DeliveryOptimizationMaxCacheSize::class, 'createFromDiscriminatorValue'))); },
            'minimumBatteryPercentageAllowedToUpload' => function (ParseNode $n) use ($o) { $o->setMinimumBatteryPercentageAllowedToUpload($n->getIntegerValue()); },
            'minimumDiskSizeAllowedToPeerInGigabytes' => function (ParseNode $n) use ($o) { $o->setMinimumDiskSizeAllowedToPeerInGigabytes($n->getIntegerValue()); },
            'minimumFileSizeToCacheInMegabytes' => function (ParseNode $n) use ($o) { $o->setMinimumFileSizeToCacheInMegabytes($n->getIntegerValue()); },
            'minimumRamAllowedToPeerInGigabytes' => function (ParseNode $n) use ($o) { $o->setMinimumRamAllowedToPeerInGigabytes($n->getIntegerValue()); },
            'modifyCacheLocation' => function (ParseNode $n) use ($o) { $o->setModifyCacheLocation($n->getStringValue()); },
            'restrictPeerSelectionBy' => function (ParseNode $n) use ($o) { $o->setRestrictPeerSelectionBy($n->getEnumValue(DeliveryOptimizationRestrictPeerSelectionByOptions::class)); },
            'vpnPeerCaching' => function (ParseNode $n) use ($o) { $o->setVpnPeerCaching($n->getEnumValue(Enablement::class)); },
        ]);
    }

    /**
     * Gets the foregroundDownloadFromHttpDelayInSeconds property value. Specifies number of seconds to delay an HTTP source in a foreground download that is allowed to use peer-to-peer (0-86400). Valid values 0 to 86400
     * @return int|null
    */
    public function getForegroundDownloadFromHttpDelayInSeconds(): ?int {
        return $this->foregroundDownloadFromHttpDelayInSeconds;
    }

    /**
     * Gets the groupIdSource property value. Specifies to restrict peer selection to a specfic source.
     * @return DeliveryOptimizationGroupIdSource|null
    */
    public function getGroupIdSource(): ?DeliveryOptimizationGroupIdSource {
        return $this->groupIdSource;
    }

    /**
     * Gets the maximumCacheAgeInDays property value. Specifies the maximum time in days that each file is held in the Delivery Optimization cache after downloading successfully (0-3650). Valid values 0 to 3650
     * @return int|null
    */
    public function getMaximumCacheAgeInDays(): ?int {
        return $this->maximumCacheAgeInDays;
    }

    /**
     * Gets the maximumCacheSize property value. Specifies the maximum cache size that Delivery Optimization either as a percentage or in GB.
     * @return DeliveryOptimizationMaxCacheSize|null
    */
    public function getMaximumCacheSize(): ?DeliveryOptimizationMaxCacheSize {
        return $this->maximumCacheSize;
    }

    /**
     * Gets the minimumBatteryPercentageAllowedToUpload property value. Specifies the minimum battery percentage to allow the device to upload data (0-100). Valid values 0 to 100
     * @return int|null
    */
    public function getMinimumBatteryPercentageAllowedToUpload(): ?int {
        return $this->minimumBatteryPercentageAllowedToUpload;
    }

    /**
     * Gets the minimumDiskSizeAllowedToPeerInGigabytes property value. Specifies the minimum disk size in GB to use Peer Caching (1-100000). Valid values 1 to 100000
     * @return int|null
    */
    public function getMinimumDiskSizeAllowedToPeerInGigabytes(): ?int {
        return $this->minimumDiskSizeAllowedToPeerInGigabytes;
    }

    /**
     * Gets the minimumFileSizeToCacheInMegabytes property value. Specifies the minimum content file size in MB enabled to use Peer Caching (1-100000). Valid values 1 to 100000
     * @return int|null
    */
    public function getMinimumFileSizeToCacheInMegabytes(): ?int {
        return $this->minimumFileSizeToCacheInMegabytes;
    }

    /**
     * Gets the minimumRamAllowedToPeerInGigabytes property value. Specifies the minimum RAM size in GB to use Peer Caching (1-100000). Valid values 1 to 100000
     * @return int|null
    */
    public function getMinimumRamAllowedToPeerInGigabytes(): ?int {
        return $this->minimumRamAllowedToPeerInGigabytes;
    }

    /**
     * Gets the modifyCacheLocation property value. Specifies the drive that Delivery Optimization should use for its cache.
     * @return string|null
    */
    public function getModifyCacheLocation(): ?string {
        return $this->modifyCacheLocation;
    }

    /**
     * Gets the restrictPeerSelectionBy property value. Values to restrict peer selection by.
     * @return DeliveryOptimizationRestrictPeerSelectionByOptions|null
    */
    public function getRestrictPeerSelectionBy(): ?DeliveryOptimizationRestrictPeerSelectionByOptions {
        return $this->restrictPeerSelectionBy;
    }

    /**
     * Gets the vpnPeerCaching property value. Possible values of a property
     * @return Enablement|null
    */
    public function getVpnPeerCaching(): ?Enablement {
        return $this->vpnPeerCaching;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('backgroundDownloadFromHttpDelayInSeconds', $this->backgroundDownloadFromHttpDelayInSeconds);
        $writer->writeObjectValue('bandwidthMode', $this->bandwidthMode);
        $writer->writeIntegerValue('cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds', $this->cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds);
        $writer->writeIntegerValue('cacheServerForegroundDownloadFallbackToHttpDelayInSeconds', $this->cacheServerForegroundDownloadFallbackToHttpDelayInSeconds);
        $writer->writeCollectionOfPrimitiveValues('cacheServerHostNames', $this->cacheServerHostNames);
        $writer->writeEnumValue('deliveryOptimizationMode', $this->deliveryOptimizationMode);
        $writer->writeIntegerValue('foregroundDownloadFromHttpDelayInSeconds', $this->foregroundDownloadFromHttpDelayInSeconds);
        $writer->writeObjectValue('groupIdSource', $this->groupIdSource);
        $writer->writeIntegerValue('maximumCacheAgeInDays', $this->maximumCacheAgeInDays);
        $writer->writeObjectValue('maximumCacheSize', $this->maximumCacheSize);
        $writer->writeIntegerValue('minimumBatteryPercentageAllowedToUpload', $this->minimumBatteryPercentageAllowedToUpload);
        $writer->writeIntegerValue('minimumDiskSizeAllowedToPeerInGigabytes', $this->minimumDiskSizeAllowedToPeerInGigabytes);
        $writer->writeIntegerValue('minimumFileSizeToCacheInMegabytes', $this->minimumFileSizeToCacheInMegabytes);
        $writer->writeIntegerValue('minimumRamAllowedToPeerInGigabytes', $this->minimumRamAllowedToPeerInGigabytes);
        $writer->writeStringValue('modifyCacheLocation', $this->modifyCacheLocation);
        $writer->writeEnumValue('restrictPeerSelectionBy', $this->restrictPeerSelectionBy);
        $writer->writeEnumValue('vpnPeerCaching', $this->vpnPeerCaching);
    }

    /**
     * Sets the backgroundDownloadFromHttpDelayInSeconds property value. Specifies number of seconds to delay an HTTP source in a background download that is allowed to use peer-to-peer. Valid values 0 to 4294967295
     *  @param int|null $value Value to set for the backgroundDownloadFromHttpDelayInSeconds property.
    */
    public function setBackgroundDownloadFromHttpDelayInSeconds(?int $value ): void {
        $this->backgroundDownloadFromHttpDelayInSeconds = $value;
    }

    /**
     * Sets the bandwidthMode property value. Specifies foreground and background bandwidth usage using percentages, absolutes, or hours.
     *  @param DeliveryOptimizationBandwidth|null $value Value to set for the bandwidthMode property.
    */
    public function setBandwidthMode(?DeliveryOptimizationBandwidth $value ): void {
        $this->bandwidthMode = $value;
    }

    /**
     * Sets the cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds property value. Specifies number of seconds to delay a fall back from cache servers to an HTTP source for a background download. Valid values 0 to 2592000.
     *  @param int|null $value Value to set for the cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds property.
    */
    public function setCacheServerBackgroundDownloadFallbackToHttpDelayInSeconds(?int $value ): void {
        $this->cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds = $value;
    }

    /**
     * Sets the cacheServerForegroundDownloadFallbackToHttpDelayInSeconds property value. Specifies number of seconds to delay a fall back from cache servers to an HTTP source for a foreground download. Valid values 0 to 2592000.​
     *  @param int|null $value Value to set for the cacheServerForegroundDownloadFallbackToHttpDelayInSeconds property.
    */
    public function setCacheServerForegroundDownloadFallbackToHttpDelayInSeconds(?int $value ): void {
        $this->cacheServerForegroundDownloadFallbackToHttpDelayInSeconds = $value;
    }

    /**
     * Sets the cacheServerHostNames property value. Specifies cache servers host names.
     *  @param array<string>|null $value Value to set for the cacheServerHostNames property.
    */
    public function setCacheServerHostNames(?array $value ): void {
        $this->cacheServerHostNames = $value;
    }

    /**
     * Sets the deliveryOptimizationMode property value. Delivery optimization mode for peer distribution
     *  @param WindowsDeliveryOptimizationMode|null $value Value to set for the deliveryOptimizationMode property.
    */
    public function setDeliveryOptimizationMode(?WindowsDeliveryOptimizationMode $value ): void {
        $this->deliveryOptimizationMode = $value;
    }

    /**
     * Sets the foregroundDownloadFromHttpDelayInSeconds property value. Specifies number of seconds to delay an HTTP source in a foreground download that is allowed to use peer-to-peer (0-86400). Valid values 0 to 86400
     *  @param int|null $value Value to set for the foregroundDownloadFromHttpDelayInSeconds property.
    */
    public function setForegroundDownloadFromHttpDelayInSeconds(?int $value ): void {
        $this->foregroundDownloadFromHttpDelayInSeconds = $value;
    }

    /**
     * Sets the groupIdSource property value. Specifies to restrict peer selection to a specfic source.
     *  @param DeliveryOptimizationGroupIdSource|null $value Value to set for the groupIdSource property.
    */
    public function setGroupIdSource(?DeliveryOptimizationGroupIdSource $value ): void {
        $this->groupIdSource = $value;
    }

    /**
     * Sets the maximumCacheAgeInDays property value. Specifies the maximum time in days that each file is held in the Delivery Optimization cache after downloading successfully (0-3650). Valid values 0 to 3650
     *  @param int|null $value Value to set for the maximumCacheAgeInDays property.
    */
    public function setMaximumCacheAgeInDays(?int $value ): void {
        $this->maximumCacheAgeInDays = $value;
    }

    /**
     * Sets the maximumCacheSize property value. Specifies the maximum cache size that Delivery Optimization either as a percentage or in GB.
     *  @param DeliveryOptimizationMaxCacheSize|null $value Value to set for the maximumCacheSize property.
    */
    public function setMaximumCacheSize(?DeliveryOptimizationMaxCacheSize $value ): void {
        $this->maximumCacheSize = $value;
    }

    /**
     * Sets the minimumBatteryPercentageAllowedToUpload property value. Specifies the minimum battery percentage to allow the device to upload data (0-100). Valid values 0 to 100
     *  @param int|null $value Value to set for the minimumBatteryPercentageAllowedToUpload property.
    */
    public function setMinimumBatteryPercentageAllowedToUpload(?int $value ): void {
        $this->minimumBatteryPercentageAllowedToUpload = $value;
    }

    /**
     * Sets the minimumDiskSizeAllowedToPeerInGigabytes property value. Specifies the minimum disk size in GB to use Peer Caching (1-100000). Valid values 1 to 100000
     *  @param int|null $value Value to set for the minimumDiskSizeAllowedToPeerInGigabytes property.
    */
    public function setMinimumDiskSizeAllowedToPeerInGigabytes(?int $value ): void {
        $this->minimumDiskSizeAllowedToPeerInGigabytes = $value;
    }

    /**
     * Sets the minimumFileSizeToCacheInMegabytes property value. Specifies the minimum content file size in MB enabled to use Peer Caching (1-100000). Valid values 1 to 100000
     *  @param int|null $value Value to set for the minimumFileSizeToCacheInMegabytes property.
    */
    public function setMinimumFileSizeToCacheInMegabytes(?int $value ): void {
        $this->minimumFileSizeToCacheInMegabytes = $value;
    }

    /**
     * Sets the minimumRamAllowedToPeerInGigabytes property value. Specifies the minimum RAM size in GB to use Peer Caching (1-100000). Valid values 1 to 100000
     *  @param int|null $value Value to set for the minimumRamAllowedToPeerInGigabytes property.
    */
    public function setMinimumRamAllowedToPeerInGigabytes(?int $value ): void {
        $this->minimumRamAllowedToPeerInGigabytes = $value;
    }

    /**
     * Sets the modifyCacheLocation property value. Specifies the drive that Delivery Optimization should use for its cache.
     *  @param string|null $value Value to set for the modifyCacheLocation property.
    */
    public function setModifyCacheLocation(?string $value ): void {
        $this->modifyCacheLocation = $value;
    }

    /**
     * Sets the restrictPeerSelectionBy property value. Values to restrict peer selection by.
     *  @param DeliveryOptimizationRestrictPeerSelectionByOptions|null $value Value to set for the restrictPeerSelectionBy property.
    */
    public function setRestrictPeerSelectionBy(?DeliveryOptimizationRestrictPeerSelectionByOptions $value ): void {
        $this->restrictPeerSelectionBy = $value;
    }

    /**
     * Sets the vpnPeerCaching property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the vpnPeerCaching property.
    */
    public function setVpnPeerCaching(?Enablement $value ): void {
        $this->vpnPeerCaching = $value;
    }

}
