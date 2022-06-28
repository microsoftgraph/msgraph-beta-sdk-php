<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsScoreHistory extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $startupDateTime The user experience analytics device startup date time.
    */
    private ?DateTime $startupDateTime = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsScoreHistory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsScoreHistory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsScoreHistory {
        return new UserExperienceAnalyticsScoreHistory();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'startupDateTime' => function (ParseNode $n) use ($o) { $o->setStartupDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the startupDateTime property value. The user experience analytics device startup date time.
     * @return DateTime|null
    */
    public function getStartupDateTime(): ?DateTime {
        return $this->startupDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('startupDateTime', $this->startupDateTime);
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
     * Sets the startupDateTime property value. The user experience analytics device startup date time.
     *  @param DateTime|null $value Value to set for the startupDateTime property.
    */
    public function setStartupDateTime(?DateTime $value ): void {
        $this->startupDateTime = $value;
    }

}
