<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LoggedOnUser implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $lastLogOnDateTime Date time when user logs on
    */
    private ?DateTime $lastLogOnDateTime = null;
    
    /**
     * @var string|null $userId User id
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new loggedOnUser and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LoggedOnUser
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LoggedOnUser {
        return new LoggedOnUser();
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
        return  [
            'lastLogOnDateTime' => function (ParseNode $n) use ($o) { $o->setLastLogOnDateTime($n->getDateTimeValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the lastLogOnDateTime property value. Date time when user logs on
     * @return DateTime|null
    */
    public function getLastLogOnDateTime(): ?DateTime {
        return $this->lastLogOnDateTime;
    }

    /**
     * Gets the userId property value. User id
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('lastLogOnDateTime', $this->lastLogOnDateTime);
        $writer->writeStringValue('userId', $this->userId);
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
     * Sets the lastLogOnDateTime property value. Date time when user logs on
     *  @param DateTime|null $value Value to set for the lastLogOnDateTime property.
    */
    public function setLastLogOnDateTime(?DateTime $value ): void {
        $this->lastLogOnDateTime = $value;
    }

    /**
     * Sets the userId property value. User id
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
