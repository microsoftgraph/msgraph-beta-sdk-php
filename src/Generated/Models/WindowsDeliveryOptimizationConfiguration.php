<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsDeliveryOptimizationConfiguration extends DeviceConfiguration implements Parsable 
{
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
        return $this->getBackingStore()->get('backgroundDownloadFromHttpDelayInSeconds');
    }

    /**
     * Gets the bandwidthMode property value. Specifies foreground and background bandwidth usage using percentages, absolutes, or hours.
     * @return DeliveryOptimizationBandwidth|null
    */
    public function getBandwidthMode(): ?DeliveryOptimizationBandwidth {
        return $this->getBackingStore()->get('bandwidthMode');
    }

    /**
     * Gets the cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds property value. Specifies number of seconds to delay a fall back from cache servers to an HTTP source for a background download. Valid values 0 to 2592000.
     * @return int|null
    */
    public function getCacheServerBackgroundDownloadFallbackToHttpDelayInSeconds(): ?int {
        return $this->getBackingStore()->get('cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds');
    }

    /**
     * Gets the cacheServerForegroundDownloadFallbackToHttpDelayInSeconds property value. Specifies number of seconds to delay a fall back from cache servers to an HTTP source for a foreground download. Valid values 0 to 2592000.​
     * @return int|null
    */
    public function getCacheServerForegroundDownloadFallbackToHttpDelayInSeconds(): ?int {
        return $this->getBackingStore()->get('cacheServerForegroundDownloadFallbackToHttpDelayInSeconds');
    }

    /**
     * Gets the cacheServerHostNames property value. Specifies cache servers host names.
     * @return array<string>|null
    */
    public function getCacheServerHostNames(): ?array {
        return $this->getBackingStore()->get('cacheServerHostNames');
    }

    /**
     * Gets the deliveryOptimizationMode property value. Delivery optimization mode for peer distribution
     * @return WindowsDeliveryOptimizationMode|null
    */
    public function getDeliveryOptimizationMode(): ?WindowsDeliveryOptimizationMode {
        return $this->getBackingStore()->get('deliveryOptimizationMode');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'backgroundDownloadFromHttpDelayInSeconds' => fn(ParseNode $n) => $o->setBackgroundDownloadFromHttpDelayInSeconds($n->getIntegerValue()),
            'bandwidthMode' => fn(ParseNode $n) => $o->setBandwidthMode($n->getObjectValue([DeliveryOptimizationBandwidth::class, 'createFromDiscriminatorValue'])),
            'cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds' => fn(ParseNode $n) => $o->setCacheServerBackgroundDownloadFallbackToHttpDelayInSeconds($n->getIntegerValue()),
            'cacheServerForegroundDownloadFallbackToHttpDelayInSeconds' => fn(ParseNode $n) => $o->setCacheServerForegroundDownloadFallbackToHttpDelayInSeconds($n->getIntegerValue()),
            'cacheServerHostNames' => fn(ParseNode $n) => $o->setCacheServerHostNames($n->getCollectionOfPrimitiveValues()),
            'deliveryOptimizationMode' => fn(ParseNode $n) => $o->setDeliveryOptimizationMode($n->getEnumValue(WindowsDeliveryOptimizationMode::class)),
            'foregroundDownloadFromHttpDelayInSeconds' => fn(ParseNode $n) => $o->setForegroundDownloadFromHttpDelayInSeconds($n->getIntegerValue()),
            'groupIdSource' => fn(ParseNode $n) => $o->setGroupIdSource($n->getObjectValue([DeliveryOptimizationGroupIdSource::class, 'createFromDiscriminatorValue'])),
            'maximumCacheAgeInDays' => fn(ParseNode $n) => $o->setMaximumCacheAgeInDays($n->getIntegerValue()),
            'maximumCacheSize' => fn(ParseNode $n) => $o->setMaximumCacheSize($n->getObjectValue([DeliveryOptimizationMaxCacheSize::class, 'createFromDiscriminatorValue'])),
            'minimumBatteryPercentageAllowedToUpload' => fn(ParseNode $n) => $o->setMinimumBatteryPercentageAllowedToUpload($n->getIntegerValue()),
            'minimumDiskSizeAllowedToPeerInGigabytes' => fn(ParseNode $n) => $o->setMinimumDiskSizeAllowedToPeerInGigabytes($n->getIntegerValue()),
            'minimumFileSizeToCacheInMegabytes' => fn(ParseNode $n) => $o->setMinimumFileSizeToCacheInMegabytes($n->getIntegerValue()),
            'minimumRamAllowedToPeerInGigabytes' => fn(ParseNode $n) => $o->setMinimumRamAllowedToPeerInGigabytes($n->getIntegerValue()),
            'modifyCacheLocation' => fn(ParseNode $n) => $o->setModifyCacheLocation($n->getStringValue()),
            'restrictPeerSelectionBy' => fn(ParseNode $n) => $o->setRestrictPeerSelectionBy($n->getEnumValue(DeliveryOptimizationRestrictPeerSelectionByOptions::class)),
            'vpnPeerCaching' => fn(ParseNode $n) => $o->setVpnPeerCaching($n->getEnumValue(Enablement::class)),
        ]);
    }

    /**
     * Gets the foregroundDownloadFromHttpDelayInSeconds property value. Specifies number of seconds to delay an HTTP source in a foreground download that is allowed to use peer-to-peer (0-86400). Valid values 0 to 86400
     * @return int|null
    */
    public function getForegroundDownloadFromHttpDelayInSeconds(): ?int {
        return $this->getBackingStore()->get('foregroundDownloadFromHttpDelayInSeconds');
    }

    /**
     * Gets the groupIdSource property value. Specifies to restrict peer selection to a specfic source.
     * @return DeliveryOptimizationGroupIdSource|null
    */
    public function getGroupIdSource(): ?DeliveryOptimizationGroupIdSource {
        return $this->getBackingStore()->get('groupIdSource');
    }

    /**
     * Gets the maximumCacheAgeInDays property value. Specifies the maximum time in days that each file is held in the Delivery Optimization cache after downloading successfully (0-3650). Valid values 0 to 3650
     * @return int|null
    */
    public function getMaximumCacheAgeInDays(): ?int {
        return $this->getBackingStore()->get('maximumCacheAgeInDays');
    }

    /**
     * Gets the maximumCacheSize property value. Specifies the maximum cache size that Delivery Optimization either as a percentage or in GB.
     * @return DeliveryOptimizationMaxCacheSize|null
    */
    public function getMaximumCacheSize(): ?DeliveryOptimizationMaxCacheSize {
        return $this->getBackingStore()->get('maximumCacheSize');
    }

    /**
     * Gets the minimumBatteryPercentageAllowedToUpload property value. Specifies the minimum battery percentage to allow the device to upload data (0-100). Valid values 0 to 100
     * @return int|null
    */
    public function getMinimumBatteryPercentageAllowedToUpload(): ?int {
        return $this->getBackingStore()->get('minimumBatteryPercentageAllowedToUpload');
    }

    /**
     * Gets the minimumDiskSizeAllowedToPeerInGigabytes property value. Specifies the minimum disk size in GB to use Peer Caching (1-100000). Valid values 1 to 100000
     * @return int|null
    */
    public function getMinimumDiskSizeAllowedToPeerInGigabytes(): ?int {
        return $this->getBackingStore()->get('minimumDiskSizeAllowedToPeerInGigabytes');
    }

    /**
     * Gets the minimumFileSizeToCacheInMegabytes property value. Specifies the minimum content file size in MB enabled to use Peer Caching (1-100000). Valid values 1 to 100000
     * @return int|null
    */
    public function getMinimumFileSizeToCacheInMegabytes(): ?int {
        return $this->getBackingStore()->get('minimumFileSizeToCacheInMegabytes');
    }

    /**
     * Gets the minimumRamAllowedToPeerInGigabytes property value. Specifies the minimum RAM size in GB to use Peer Caching (1-100000). Valid values 1 to 100000
     * @return int|null
    */
    public function getMinimumRamAllowedToPeerInGigabytes(): ?int {
        return $this->getBackingStore()->get('minimumRamAllowedToPeerInGigabytes');
    }

    /**
     * Gets the modifyCacheLocation property value. Specifies the drive that Delivery Optimization should use for its cache.
     * @return string|null
    */
    public function getModifyCacheLocation(): ?string {
        return $this->getBackingStore()->get('modifyCacheLocation');
    }

    /**
     * Gets the restrictPeerSelectionBy property value. Values to restrict peer selection by.
     * @return DeliveryOptimizationRestrictPeerSelectionByOptions|null
    */
    public function getRestrictPeerSelectionBy(): ?DeliveryOptimizationRestrictPeerSelectionByOptions {
        return $this->getBackingStore()->get('restrictPeerSelectionBy');
    }

    /**
     * Gets the vpnPeerCaching property value. Possible values of a property
     * @return Enablement|null
    */
    public function getVpnPeerCaching(): ?Enablement {
        return $this->getBackingStore()->get('vpnPeerCaching');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('backgroundDownloadFromHttpDelayInSeconds', $this->getBackgroundDownloadFromHttpDelayInSeconds());
        $writer->writeObjectValue('bandwidthMode', $this->getBandwidthMode());
        $writer->writeIntegerValue('cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds', $this->getCacheServerBackgroundDownloadFallbackToHttpDelayInSeconds());
        $writer->writeIntegerValue('cacheServerForegroundDownloadFallbackToHttpDelayInSeconds', $this->getCacheServerForegroundDownloadFallbackToHttpDelayInSeconds());
        $writer->writeCollectionOfPrimitiveValues('cacheServerHostNames', $this->getCacheServerHostNames());
        $writer->writeEnumValue('deliveryOptimizationMode', $this->getDeliveryOptimizationMode());
        $writer->writeIntegerValue('foregroundDownloadFromHttpDelayInSeconds', $this->getForegroundDownloadFromHttpDelayInSeconds());
        $writer->writeObjectValue('groupIdSource', $this->getGroupIdSource());
        $writer->writeIntegerValue('maximumCacheAgeInDays', $this->getMaximumCacheAgeInDays());
        $writer->writeObjectValue('maximumCacheSize', $this->getMaximumCacheSize());
        $writer->writeIntegerValue('minimumBatteryPercentageAllowedToUpload', $this->getMinimumBatteryPercentageAllowedToUpload());
        $writer->writeIntegerValue('minimumDiskSizeAllowedToPeerInGigabytes', $this->getMinimumDiskSizeAllowedToPeerInGigabytes());
        $writer->writeIntegerValue('minimumFileSizeToCacheInMegabytes', $this->getMinimumFileSizeToCacheInMegabytes());
        $writer->writeIntegerValue('minimumRamAllowedToPeerInGigabytes', $this->getMinimumRamAllowedToPeerInGigabytes());
        $writer->writeStringValue('modifyCacheLocation', $this->getModifyCacheLocation());
        $writer->writeEnumValue('restrictPeerSelectionBy', $this->getRestrictPeerSelectionBy());
        $writer->writeEnumValue('vpnPeerCaching', $this->getVpnPeerCaching());
    }

    /**
     * Sets the backgroundDownloadFromHttpDelayInSeconds property value. Specifies number of seconds to delay an HTTP source in a background download that is allowed to use peer-to-peer. Valid values 0 to 4294967295
     *  @param int|null $value Value to set for the backgroundDownloadFromHttpDelayInSeconds property.
    */
    public function setBackgroundDownloadFromHttpDelayInSeconds(?int $value): void {
        $this->getBackingStore()->set('backgroundDownloadFromHttpDelayInSeconds', $value);
    }

    /**
     * Sets the bandwidthMode property value. Specifies foreground and background bandwidth usage using percentages, absolutes, or hours.
     *  @param DeliveryOptimizationBandwidth|null $value Value to set for the bandwidthMode property.
    */
    public function setBandwidthMode(?DeliveryOptimizationBandwidth $value): void {
        $this->getBackingStore()->set('bandwidthMode', $value);
    }

    /**
     * Sets the cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds property value. Specifies number of seconds to delay a fall back from cache servers to an HTTP source for a background download. Valid values 0 to 2592000.
     *  @param int|null $value Value to set for the cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds property.
    */
    public function setCacheServerBackgroundDownloadFallbackToHttpDelayInSeconds(?int $value): void {
        $this->getBackingStore()->set('cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds', $value);
    }

    /**
     * Sets the cacheServerForegroundDownloadFallbackToHttpDelayInSeconds property value. Specifies number of seconds to delay a fall back from cache servers to an HTTP source for a foreground download. Valid values 0 to 2592000.​
     *  @param int|null $value Value to set for the cacheServerForegroundDownloadFallbackToHttpDelayInSeconds property.
    */
    public function setCacheServerForegroundDownloadFallbackToHttpDelayInSeconds(?int $value): void {
        $this->getBackingStore()->set('cacheServerForegroundDownloadFallbackToHttpDelayInSeconds', $value);
    }

    /**
     * Sets the cacheServerHostNames property value. Specifies cache servers host names.
     *  @param array<string>|null $value Value to set for the cacheServerHostNames property.
    */
    public function setCacheServerHostNames(?array $value): void {
        $this->getBackingStore()->set('cacheServerHostNames', $value);
    }

    /**
     * Sets the deliveryOptimizationMode property value. Delivery optimization mode for peer distribution
     *  @param WindowsDeliveryOptimizationMode|null $value Value to set for the deliveryOptimizationMode property.
    */
    public function setDeliveryOptimizationMode(?WindowsDeliveryOptimizationMode $value): void {
        $this->getBackingStore()->set('deliveryOptimizationMode', $value);
    }

    /**
     * Sets the foregroundDownloadFromHttpDelayInSeconds property value. Specifies number of seconds to delay an HTTP source in a foreground download that is allowed to use peer-to-peer (0-86400). Valid values 0 to 86400
     *  @param int|null $value Value to set for the foregroundDownloadFromHttpDelayInSeconds property.
    */
    public function setForegroundDownloadFromHttpDelayInSeconds(?int $value): void {
        $this->getBackingStore()->set('foregroundDownloadFromHttpDelayInSeconds', $value);
    }

    /**
     * Sets the groupIdSource property value. Specifies to restrict peer selection to a specfic source.
     *  @param DeliveryOptimizationGroupIdSource|null $value Value to set for the groupIdSource property.
    */
    public function setGroupIdSource(?DeliveryOptimizationGroupIdSource $value): void {
        $this->getBackingStore()->set('groupIdSource', $value);
    }

    /**
     * Sets the maximumCacheAgeInDays property value. Specifies the maximum time in days that each file is held in the Delivery Optimization cache after downloading successfully (0-3650). Valid values 0 to 3650
     *  @param int|null $value Value to set for the maximumCacheAgeInDays property.
    */
    public function setMaximumCacheAgeInDays(?int $value): void {
        $this->getBackingStore()->set('maximumCacheAgeInDays', $value);
    }

    /**
     * Sets the maximumCacheSize property value. Specifies the maximum cache size that Delivery Optimization either as a percentage or in GB.
     *  @param DeliveryOptimizationMaxCacheSize|null $value Value to set for the maximumCacheSize property.
    */
    public function setMaximumCacheSize(?DeliveryOptimizationMaxCacheSize $value): void {
        $this->getBackingStore()->set('maximumCacheSize', $value);
    }

    /**
     * Sets the minimumBatteryPercentageAllowedToUpload property value. Specifies the minimum battery percentage to allow the device to upload data (0-100). Valid values 0 to 100
     *  @param int|null $value Value to set for the minimumBatteryPercentageAllowedToUpload property.
    */
    public function setMinimumBatteryPercentageAllowedToUpload(?int $value): void {
        $this->getBackingStore()->set('minimumBatteryPercentageAllowedToUpload', $value);
    }

    /**
     * Sets the minimumDiskSizeAllowedToPeerInGigabytes property value. Specifies the minimum disk size in GB to use Peer Caching (1-100000). Valid values 1 to 100000
     *  @param int|null $value Value to set for the minimumDiskSizeAllowedToPeerInGigabytes property.
    */
    public function setMinimumDiskSizeAllowedToPeerInGigabytes(?int $value): void {
        $this->getBackingStore()->set('minimumDiskSizeAllowedToPeerInGigabytes', $value);
    }

    /**
     * Sets the minimumFileSizeToCacheInMegabytes property value. Specifies the minimum content file size in MB enabled to use Peer Caching (1-100000). Valid values 1 to 100000
     *  @param int|null $value Value to set for the minimumFileSizeToCacheInMegabytes property.
    */
    public function setMinimumFileSizeToCacheInMegabytes(?int $value): void {
        $this->getBackingStore()->set('minimumFileSizeToCacheInMegabytes', $value);
    }

    /**
     * Sets the minimumRamAllowedToPeerInGigabytes property value. Specifies the minimum RAM size in GB to use Peer Caching (1-100000). Valid values 1 to 100000
     *  @param int|null $value Value to set for the minimumRamAllowedToPeerInGigabytes property.
    */
    public function setMinimumRamAllowedToPeerInGigabytes(?int $value): void {
        $this->getBackingStore()->set('minimumRamAllowedToPeerInGigabytes', $value);
    }

    /**
     * Sets the modifyCacheLocation property value. Specifies the drive that Delivery Optimization should use for its cache.
     *  @param string|null $value Value to set for the modifyCacheLocation property.
    */
    public function setModifyCacheLocation(?string $value): void {
        $this->getBackingStore()->set('modifyCacheLocation', $value);
    }

    /**
     * Sets the restrictPeerSelectionBy property value. Values to restrict peer selection by.
     *  @param DeliveryOptimizationRestrictPeerSelectionByOptions|null $value Value to set for the restrictPeerSelectionBy property.
    */
    public function setRestrictPeerSelectionBy(?DeliveryOptimizationRestrictPeerSelectionByOptions $value): void {
        $this->getBackingStore()->set('restrictPeerSelectionBy', $value);
    }

    /**
     * Sets the vpnPeerCaching property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the vpnPeerCaching property.
    */
    public function setVpnPeerCaching(?Enablement $value): void {
        $this->getBackingStore()->set('vpnPeerCaching', $value);
    }

}
