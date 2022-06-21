<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CertificateConnectorDetails extends Entity 
{
    /** @var string|null $connectorName Connector name (set during enrollment). */
    private ?string $connectorName = null;
    
    /** @var DateTime|null $enrollmentDateTime Date/time when this connector was enrolled. */
    private ?DateTime $enrollmentDateTime = null;
    
    /** @var DateTime|null $lastCheckinDateTime Date/time when this connector last connected to the service. */
    private ?DateTime $lastCheckinDateTime = null;
    
    /** @var string|null $machineName Name of the machine hosting this connector service. */
    private ?string $machineName = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): CertificateConnectorDetails {
        return new CertificateConnectorDetails();
    }

    /**
     * Gets the connectorName property value. Connector name (set during enrollment).
     * @return string|null
    */
    public function getConnectorName(): ?string {
        return $this->connectorName;
    }

    /**
     * Gets the enrollmentDateTime property value. Date/time when this connector was enrolled.
     * @return DateTime|null
    */
    public function getEnrollmentDateTime(): ?DateTime {
        return $this->enrollmentDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'connectorName' => function (self $o, ParseNode $n) { $o->setConnectorName($n->getStringValue()); },
            'enrollmentDateTime' => function (self $o, ParseNode $n) { $o->setEnrollmentDateTime($n->getDateTimeValue()); },
            'lastCheckinDateTime' => function (self $o, ParseNode $n) { $o->setLastCheckinDateTime($n->getDateTimeValue()); },
            'machineName' => function (self $o, ParseNode $n) { $o->setMachineName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastCheckinDateTime property value. Date/time when this connector last connected to the service.
     * @return DateTime|null
    */
    public function getLastCheckinDateTime(): ?DateTime {
        return $this->lastCheckinDateTime;
    }

    /**
     * Gets the machineName property value. Name of the machine hosting this connector service.
     * @return string|null
    */
    public function getMachineName(): ?string {
        return $this->machineName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('connectorName', $this->connectorName);
        $writer->writeDateTimeValue('enrollmentDateTime', $this->enrollmentDateTime);
        $writer->writeDateTimeValue('lastCheckinDateTime', $this->lastCheckinDateTime);
        $writer->writeStringValue('machineName', $this->machineName);
    }

    /**
     * Sets the connectorName property value. Connector name (set during enrollment).
     *  @param string|null $value Value to set for the connectorName property.
    */
    public function setConnectorName(?string $value ): void {
        $this->connectorName = $value;
    }

    /**
     * Sets the enrollmentDateTime property value. Date/time when this connector was enrolled.
     *  @param DateTime|null $value Value to set for the enrollmentDateTime property.
    */
    public function setEnrollmentDateTime(?DateTime $value ): void {
        $this->enrollmentDateTime = $value;
    }

    /**
     * Sets the lastCheckinDateTime property value. Date/time when this connector last connected to the service.
     *  @param DateTime|null $value Value to set for the lastCheckinDateTime property.
    */
    public function setLastCheckinDateTime(?DateTime $value ): void {
        $this->lastCheckinDateTime = $value;
    }

    /**
     * Sets the machineName property value. Name of the machine hosting this connector service.
     *  @param string|null $value Value to set for the machineName property.
    */
    public function setMachineName(?string $value ): void {
        $this->machineName = $value;
    }

}
