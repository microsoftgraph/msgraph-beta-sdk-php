<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApplicationSignInDetailedSummary extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $aggregatedEventDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $aggregatedEventDateTime = null;
    
    /**
     * @var string|null $appDisplayName Name of the application that the user signed in to.
    */
    private ?string $appDisplayName = null;
    
    /**
     * @var string|null $appId ID of the application that the user signed in to.
    */
    private ?string $appId = null;
    
    /**
     * @var int|null $signInCount Count of sign-ins made by the application.
    */
    private ?int $signInCount = null;
    
    /**
     * @var SignInStatus|null $status Details of the sign-in status.
    */
    private ?SignInStatus $status = null;
    
    /**
     * Instantiates a new applicationSignInDetailedSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplicationSignInDetailedSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplicationSignInDetailedSummary {
        return new ApplicationSignInDetailedSummary();
    }

    /**
     * Gets the aggregatedEventDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getAggregatedEventDateTime(): ?DateTime {
        return $this->aggregatedEventDateTime;
    }

    /**
     * Gets the appDisplayName property value. Name of the application that the user signed in to.
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        return $this->appDisplayName;
    }

    /**
     * Gets the appId property value. ID of the application that the user signed in to.
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->appId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'aggregatedEventDateTime' => function (ParseNode $n) use ($o) { $o->setAggregatedEventDateTime($n->getDateTimeValue()); },
            'appDisplayName' => function (ParseNode $n) use ($o) { $o->setAppDisplayName($n->getStringValue()); },
            'appId' => function (ParseNode $n) use ($o) { $o->setAppId($n->getStringValue()); },
            'signInCount' => function (ParseNode $n) use ($o) { $o->setSignInCount($n->getIntegerValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getObjectValue(array(SignInStatus::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the signInCount property value. Count of sign-ins made by the application.
     * @return int|null
    */
    public function getSignInCount(): ?int {
        return $this->signInCount;
    }

    /**
     * Gets the status property value. Details of the sign-in status.
     * @return SignInStatus|null
    */
    public function getStatus(): ?SignInStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('aggregatedEventDateTime', $this->aggregatedEventDateTime);
        $writer->writeStringValue('appDisplayName', $this->appDisplayName);
        $writer->writeStringValue('appId', $this->appId);
        $writer->writeIntegerValue('signInCount', $this->signInCount);
        $writer->writeObjectValue('status', $this->status);
    }

    /**
     * Sets the aggregatedEventDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the aggregatedEventDateTime property.
    */
    public function setAggregatedEventDateTime(?DateTime $value ): void {
        $this->aggregatedEventDateTime = $value;
    }

    /**
     * Sets the appDisplayName property value. Name of the application that the user signed in to.
     *  @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value ): void {
        $this->appDisplayName = $value;
    }

    /**
     * Sets the appId property value. ID of the application that the user signed in to.
     *  @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value ): void {
        $this->appId = $value;
    }

    /**
     * Sets the signInCount property value. Count of sign-ins made by the application.
     *  @param int|null $value Value to set for the signInCount property.
    */
    public function setSignInCount(?int $value ): void {
        $this->signInCount = $value;
    }

    /**
     * Sets the status property value. Details of the sign-in status.
     *  @param SignInStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SignInStatus $value ): void {
        $this->status = $value;
    }

}
