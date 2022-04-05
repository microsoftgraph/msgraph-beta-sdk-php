<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcOnPremisesConnectionStatusDetails implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DateTime|null $endDateTime The end time of the connection health check. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    private ?DateTime $endDateTime = null;
    
    /** @var array<CloudPcOnPremisesConnectionHealthCheck>|null $healthChecks All checks that are done on the connection. */
    private ?array $healthChecks = null;
    
    /** @var DateTime|null $startDateTime The start time of the connection health check. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    private ?DateTime $startDateTime = null;
    
    /**
     * Instantiates a new cloudPcOnPremisesConnectionStatusDetails and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcOnPremisesConnectionStatusDetails
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcOnPremisesConnectionStatusDetails {
        return new CloudPcOnPremisesConnectionStatusDetails();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the endDateTime property value. The end time of the connection health check. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'endDateTime' => function (self $o, ParseNode $n) { $o->setEndDateTime($n->getDateTimeValue()); },
            'healthChecks' => function (self $o, ParseNode $n) { $o->setHealthChecks($n->getCollectionOfObjectValues(CloudPcOnPremisesConnectionHealthCheck::class)); },
            'startDateTime' => function (self $o, ParseNode $n) { $o->setStartDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the healthChecks property value. All checks that are done on the connection.
     * @return array<CloudPcOnPremisesConnectionHealthCheck>|null
    */
    public function getHealthChecks(): ?array {
        return $this->healthChecks;
    }

    /**
     * Gets the startDateTime property value. The start time of the connection health check. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeCollectionOfObjectValues('healthChecks', $this->healthChecks);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the endDateTime property value. The end time of the connection health check. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the healthChecks property value. All checks that are done on the connection.
     *  @param array<CloudPcOnPremisesConnectionHealthCheck>|null $value Value to set for the healthChecks property.
    */
    public function setHealthChecks(?array $value ): void {
        $this->healthChecks = $value;
    }

    /**
     * Sets the startDateTime property value. The start time of the connection health check. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

}
