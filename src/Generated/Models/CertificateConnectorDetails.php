<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CertificateConnectorDetails extends Entity implements Parsable 
{
    /**
     * Instantiates a new certificateConnectorDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CertificateConnectorDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CertificateConnectorDetails {
        return new CertificateConnectorDetails();
    }

    /**
     * Gets the connectorName property value. Connector name (set during enrollment).
     * @return string|null
    */
    public function getConnectorName(): ?string {
        return $this->getBackingStore()->get('connectorName');
    }

    /**
     * Gets the connectorVersion property value. Version of the connector installed.
     * @return string|null
    */
    public function getConnectorVersion(): ?string {
        return $this->getBackingStore()->get('connectorVersion');
    }

    /**
     * Gets the enrollmentDateTime property value. Date/time when this connector was enrolled.
     * @return DateTime|null
    */
    public function getEnrollmentDateTime(): ?DateTime {
        return $this->getBackingStore()->get('enrollmentDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'connectorName' => fn(ParseNode $n) => $o->setConnectorName($n->getStringValue()),
            'connectorVersion' => fn(ParseNode $n) => $o->setConnectorVersion($n->getStringValue()),
            'enrollmentDateTime' => fn(ParseNode $n) => $o->setEnrollmentDateTime($n->getDateTimeValue()),
            'lastCheckinDateTime' => fn(ParseNode $n) => $o->setLastCheckinDateTime($n->getDateTimeValue()),
            'machineName' => fn(ParseNode $n) => $o->setMachineName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastCheckinDateTime property value. Date/time when this connector last connected to the service.
     * @return DateTime|null
    */
    public function getLastCheckinDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastCheckinDateTime');
    }

    /**
     * Gets the machineName property value. Name of the machine hosting this connector service.
     * @return string|null
    */
    public function getMachineName(): ?string {
        return $this->getBackingStore()->get('machineName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('connectorName', $this->getConnectorName());
        $writer->writeStringValue('connectorVersion', $this->getConnectorVersion());
        $writer->writeDateTimeValue('enrollmentDateTime', $this->getEnrollmentDateTime());
        $writer->writeDateTimeValue('lastCheckinDateTime', $this->getLastCheckinDateTime());
        $writer->writeStringValue('machineName', $this->getMachineName());
    }

    /**
     * Sets the connectorName property value. Connector name (set during enrollment).
     *  @param string|null $value Value to set for the connectorName property.
    */
    public function setConnectorName(?string $value): void {
        $this->getBackingStore()->set('connectorName', $value);
    }

    /**
     * Sets the connectorVersion property value. Version of the connector installed.
     *  @param string|null $value Value to set for the connectorVersion property.
    */
    public function setConnectorVersion(?string $value): void {
        $this->getBackingStore()->set('connectorVersion', $value);
    }

    /**
     * Sets the enrollmentDateTime property value. Date/time when this connector was enrolled.
     *  @param DateTime|null $value Value to set for the enrollmentDateTime property.
    */
    public function setEnrollmentDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('enrollmentDateTime', $value);
    }

    /**
     * Sets the lastCheckinDateTime property value. Date/time when this connector last connected to the service.
     *  @param DateTime|null $value Value to set for the lastCheckinDateTime property.
    */
    public function setLastCheckinDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastCheckinDateTime', $value);
    }

    /**
     * Sets the machineName property value. Name of the machine hosting this connector service.
     *  @param string|null $value Value to set for the machineName property.
    */
    public function setMachineName(?string $value): void {
        $this->getBackingStore()->set('machineName', $value);
    }

}
