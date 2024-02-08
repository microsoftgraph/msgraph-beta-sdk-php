<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RemoteNetwork extends Entity implements Parsable 
{
    /**
     * Instantiates a new RemoteNetwork and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoteNetwork
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemoteNetwork {
        return new RemoteNetwork();
    }

    /**
     * Gets the bandwidthCapacity property value. The bandwidthCapacity property
     * @return int|null
    */
    public function getBandwidthCapacity(): ?int {
        $val = $this->getBackingStore()->get('bandwidthCapacity');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bandwidthCapacity'");
    }

    /**
     * Gets the connectivityConfiguration property value. The connectivityConfiguration property
     * @return RemoteNetworkConnectivityConfiguration|null
    */
    public function getConnectivityConfiguration(): ?RemoteNetworkConnectivityConfiguration {
        $val = $this->getBackingStore()->get('connectivityConfiguration');
        if (is_null($val) || $val instanceof RemoteNetworkConnectivityConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectivityConfiguration'");
    }

    /**
     * Gets the connectivityState property value. The connectivityState property
     * @return ConnectivityState|null
    */
    public function getConnectivityState(): ?ConnectivityState {
        $val = $this->getBackingStore()->get('connectivityState');
        if (is_null($val) || $val instanceof ConnectivityState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectivityState'");
    }

    /**
     * Gets the country property value. The country property
     * @return string|null
    */
    public function getCountry(): ?string {
        $val = $this->getBackingStore()->get('country');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'country'");
    }

    /**
     * Gets the deviceLinks property value. The deviceLinks property
     * @return array<DeviceLink>|null
    */
    public function getDeviceLinks(): ?array {
        $val = $this->getBackingStore()->get('deviceLinks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceLink::class);
            /** @var array<DeviceLink>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceLinks'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bandwidthCapacity' => fn(ParseNode $n) => $o->setBandwidthCapacity($n->getIntegerValue()),
            'connectivityConfiguration' => fn(ParseNode $n) => $o->setConnectivityConfiguration($n->getObjectValue([RemoteNetworkConnectivityConfiguration::class, 'createFromDiscriminatorValue'])),
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
        $val = $this->getBackingStore()->get('forwardingProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ForwardingProfile::class);
            /** @var array<ForwardingProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'forwardingProfiles'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the region property value. The region property
     * @return Region|null
    */
    public function getRegion(): ?Region {
        $val = $this->getBackingStore()->get('region');
        if (is_null($val) || $val instanceof Region) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'region'");
    }

    /**
     * Gets the version property value. The version property
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('bandwidthCapacity', $this->getBandwidthCapacity());
        $writer->writeObjectValue('connectivityConfiguration', $this->getConnectivityConfiguration());
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
     * Sets the connectivityConfiguration property value. The connectivityConfiguration property
     * @param RemoteNetworkConnectivityConfiguration|null $value Value to set for the connectivityConfiguration property.
    */
    public function setConnectivityConfiguration(?RemoteNetworkConnectivityConfiguration $value): void {
        $this->getBackingStore()->set('connectivityConfiguration', $value);
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
