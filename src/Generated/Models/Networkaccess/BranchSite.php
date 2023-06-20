<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BranchSite extends Entity implements Parsable 
{
    /**
     * Instantiates a new branchSite and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BranchSite
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BranchSite {
        return new BranchSite();
    }

    /**
     * Gets the bandwidthCapacity property value. The bandwidthCapacity property
     * @return int|null
    */
    public function getBandwidthCapacity(): ?int {
        return $this->getBackingStore()->get('bandwidthCapacity');
    }

    /**
     * Gets the connectivityState property value. The connectivityState property
     * @return ConnectivityState|null
    */
    public function getConnectivityState(): ?ConnectivityState {
        return $this->getBackingStore()->get('connectivityState');
    }

    /**
     * Gets the country property value. The country property
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->getBackingStore()->get('country');
    }

    /**
     * Gets the deviceLinks property value. The deviceLinks property
     * @return array<DeviceLink>|null
    */
    public function getDeviceLinks(): ?array {
        return $this->getBackingStore()->get('deviceLinks');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bandwidthCapacity' => fn(ParseNode $n) => $o->setBandwidthCapacity($n->getIntegerValue()),
            'connectivityState' => fn(ParseNode $n) => $o->setConnectivityState($n->getEnumValue(ConnectivityState::class)),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'deviceLinks' => fn(ParseNode $n) => $o->setDeviceLinks($n->getCollectionOfObjectValues([DeviceLink::class, 'createFromDiscriminatorValue'])),
            'forwardingProfiles' => fn(ParseNode $n) => $o->setForwardingProfiles($n->getCollectionOfObjectValues([ForwardingProfile::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'region' => fn(ParseNode $n) => $o->setRegion($n->getEnumValue(Region::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the forwardingProfiles property value. The forwardingProfiles property
     * @return array<ForwardingProfile>|null
    */
    public function getForwardingProfiles(): ?array {
        return $this->getBackingStore()->get('forwardingProfiles');
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the region property value. The region property
     * @return Region|null
    */
    public function getRegion(): ?Region {
        return $this->getBackingStore()->get('region');
    }

    /**
     * Gets the version property value. The version property
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->getBackingStore()->get('version');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('bandwidthCapacity', $this->getBandwidthCapacity());
        $writer->writeEnumValue('connectivityState', $this->getConnectivityState());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeCollectionOfObjectValues('deviceLinks', $this->getDeviceLinks());
        $writer->writeCollectionOfObjectValues('forwardingProfiles', $this->getForwardingProfiles());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeEnumValue('region', $this->getRegion());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the bandwidthCapacity property value. The bandwidthCapacity property
     * @param int|null $value Value to set for the bandwidthCapacity property.
    */
    public function setBandwidthCapacity(?int $value): void {
        $this->getBackingStore()->set('bandwidthCapacity', $value);
    }

    /**
     * Sets the connectivityState property value. The connectivityState property
     * @param ConnectivityState|null $value Value to set for the connectivityState property.
    */
    public function setConnectivityState(?ConnectivityState $value): void {
        $this->getBackingStore()->set('connectivityState', $value);
    }

    /**
     * Sets the country property value. The country property
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->getBackingStore()->set('country', $value);
    }

    /**
     * Sets the deviceLinks property value. The deviceLinks property
     * @param array<DeviceLink>|null $value Value to set for the deviceLinks property.
    */
    public function setDeviceLinks(?array $value): void {
        $this->getBackingStore()->set('deviceLinks', $value);
    }

    /**
     * Sets the forwardingProfiles property value. The forwardingProfiles property
     * @param array<ForwardingProfile>|null $value Value to set for the forwardingProfiles property.
    */
    public function setForwardingProfiles(?array $value): void {
        $this->getBackingStore()->set('forwardingProfiles', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the region property value. The region property
     * @param Region|null $value Value to set for the region property.
    */
    public function setRegion(?Region $value): void {
        $this->getBackingStore()->set('region', $value);
    }

    /**
     * Sets the version property value. The version property
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
