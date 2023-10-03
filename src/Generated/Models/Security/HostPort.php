<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class HostPort extends Entity implements Parsable 
{
    /**
     * Instantiates a new hostPort and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HostPort
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HostPort {
        return new HostPort();
    }

    /**
     * Gets the banners property value. The banners property
     * @return array<HostPortBanner>|null
    */
    public function getBanners(): ?array {
        $val = $this->getBackingStore()->get('banners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HostPortBanner::class);
            /** @var array<HostPortBanner>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'banners'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'banners' => fn(ParseNode $n) => $o->setBanners($n->getCollectionOfObjectValues([HostPortBanner::class, 'createFromDiscriminatorValue'])),
            'firstSeenDateTime' => fn(ParseNode $n) => $o->setFirstSeenDateTime($n->getDateTimeValue()),
            'host' => fn(ParseNode $n) => $o->setHost($n->getObjectValue([Host::class, 'createFromDiscriminatorValue'])),
            'lastScanDateTime' => fn(ParseNode $n) => $o->setLastScanDateTime($n->getDateTimeValue()),
            'lastSeenDateTime' => fn(ParseNode $n) => $o->setLastSeenDateTime($n->getDateTimeValue()),
            'mostRecentSslCertificate' => fn(ParseNode $n) => $o->setMostRecentSslCertificate($n->getObjectValue([SslCertificate::class, 'createFromDiscriminatorValue'])),
            'port' => fn(ParseNode $n) => $o->setPort($n->getIntegerValue()),
            'protocol' => fn(ParseNode $n) => $o->setProtocol($n->getEnumValue(HostPortProtocol::class)),
            'services' => fn(ParseNode $n) => $o->setServices($n->getCollectionOfObjectValues([HostPortComponent::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(HostPortStatus::class)),
            'timesObserved' => fn(ParseNode $n) => $o->setTimesObserved($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the firstSeenDateTime property value. The firstSeenDateTime property
     * @return DateTime|null
    */
    public function getFirstSeenDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('firstSeenDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firstSeenDateTime'");
    }

    /**
     * Gets the host property value. The host property
     * @return Host|null
    */
    public function getHost(): ?Host {
        $val = $this->getBackingStore()->get('host');
        if (is_null($val) || $val instanceof Host) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'host'");
    }

    /**
     * Gets the lastScanDateTime property value. The lastScanDateTime property
     * @return DateTime|null
    */
    public function getLastScanDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastScanDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastScanDateTime'");
    }

    /**
     * Gets the lastSeenDateTime property value. The lastSeenDateTime property
     * @return DateTime|null
    */
    public function getLastSeenDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSeenDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSeenDateTime'");
    }

    /**
     * Gets the mostRecentSslCertificate property value. The mostRecentSslCertificate property
     * @return SslCertificate|null
    */
    public function getMostRecentSslCertificate(): ?SslCertificate {
        $val = $this->getBackingStore()->get('mostRecentSslCertificate');
        if (is_null($val) || $val instanceof SslCertificate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mostRecentSslCertificate'");
    }

    /**
     * Gets the port property value. The port property
     * @return int|null
    */
    public function getPort(): ?int {
        $val = $this->getBackingStore()->get('port');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'port'");
    }

    /**
     * Gets the protocol property value. The protocol property
     * @return HostPortProtocol|null
    */
    public function getProtocol(): ?HostPortProtocol {
        $val = $this->getBackingStore()->get('protocol');
        if (is_null($val) || $val instanceof HostPortProtocol) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protocol'");
    }

    /**
     * Gets the services property value. The services property
     * @return array<HostPortComponent>|null
    */
    public function getServices(): ?array {
        $val = $this->getBackingStore()->get('services');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HostPortComponent::class);
            /** @var array<HostPortComponent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'services'");
    }

    /**
     * Gets the status property value. The status property
     * @return HostPortStatus|null
    */
    public function getStatus(): ?HostPortStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof HostPortStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the timesObserved property value. The timesObserved property
     * @return int|null
    */
    public function getTimesObserved(): ?int {
        $val = $this->getBackingStore()->get('timesObserved');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timesObserved'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('banners', $this->getBanners());
        $writer->writeDateTimeValue('firstSeenDateTime', $this->getFirstSeenDateTime());
        $writer->writeObjectValue('host', $this->getHost());
        $writer->writeDateTimeValue('lastScanDateTime', $this->getLastScanDateTime());
        $writer->writeDateTimeValue('lastSeenDateTime', $this->getLastSeenDateTime());
        $writer->writeObjectValue('mostRecentSslCertificate', $this->getMostRecentSslCertificate());
        $writer->writeIntegerValue('port', $this->getPort());
        $writer->writeEnumValue('protocol', $this->getProtocol());
        $writer->writeCollectionOfObjectValues('services', $this->getServices());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeIntegerValue('timesObserved', $this->getTimesObserved());
    }

    /**
     * Sets the banners property value. The banners property
     * @param array<HostPortBanner>|null $value Value to set for the banners property.
    */
    public function setBanners(?array $value): void {
        $this->getBackingStore()->set('banners', $value);
    }

    /**
     * Sets the firstSeenDateTime property value. The firstSeenDateTime property
     * @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstSeenDateTime', $value);
    }

    /**
     * Sets the host property value. The host property
     * @param Host|null $value Value to set for the host property.
    */
    public function setHost(?Host $value): void {
        $this->getBackingStore()->set('host', $value);
    }

    /**
     * Sets the lastScanDateTime property value. The lastScanDateTime property
     * @param DateTime|null $value Value to set for the lastScanDateTime property.
    */
    public function setLastScanDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastScanDateTime', $value);
    }

    /**
     * Sets the lastSeenDateTime property value. The lastSeenDateTime property
     * @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSeenDateTime', $value);
    }

    /**
     * Sets the mostRecentSslCertificate property value. The mostRecentSslCertificate property
     * @param SslCertificate|null $value Value to set for the mostRecentSslCertificate property.
    */
    public function setMostRecentSslCertificate(?SslCertificate $value): void {
        $this->getBackingStore()->set('mostRecentSslCertificate', $value);
    }

    /**
     * Sets the port property value. The port property
     * @param int|null $value Value to set for the port property.
    */
    public function setPort(?int $value): void {
        $this->getBackingStore()->set('port', $value);
    }

    /**
     * Sets the protocol property value. The protocol property
     * @param HostPortProtocol|null $value Value to set for the protocol property.
    */
    public function setProtocol(?HostPortProtocol $value): void {
        $this->getBackingStore()->set('protocol', $value);
    }

    /**
     * Sets the services property value. The services property
     * @param array<HostPortComponent>|null $value Value to set for the services property.
    */
    public function setServices(?array $value): void {
        $this->getBackingStore()->set('services', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param HostPortStatus|null $value Value to set for the status property.
    */
    public function setStatus(?HostPortStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the timesObserved property value. The timesObserved property
     * @param int|null $value Value to set for the timesObserved property.
    */
    public function setTimesObserved(?int $value): void {
        $this->getBackingStore()->set('timesObserved', $value);
    }

}
