<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserRegistrationCount implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $registrationCount Provides the registration count for your tenant.
    */
    private ?int $registrationCount = null;
    
    /**
     * @var RegistrationStatusType|null $registrationStatus Represents the status of user registration. Possible values are: registered, enabled, capable, and mfaRegistered.
    */
    private ?RegistrationStatusType $registrationStatus = null;
    
    /**
     * Instantiates a new userRegistrationCount and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserRegistrationCount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserRegistrationCount {
        return new UserRegistrationCount();
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
            'registrationCount' => function (ParseNode $n) use ($o) { $o->setRegistrationCount($n->getIntegerValue()); },
            'registrationStatus' => function (ParseNode $n) use ($o) { $o->setRegistrationStatus($n->getEnumValue(RegistrationStatusType::class)); },
        ];
    }

    /**
     * Gets the registrationCount property value. Provides the registration count for your tenant.
     * @return int|null
    */
    public function getRegistrationCount(): ?int {
        return $this->registrationCount;
    }

    /**
     * Gets the registrationStatus property value. Represents the status of user registration. Possible values are: registered, enabled, capable, and mfaRegistered.
     * @return RegistrationStatusType|null
    */
    public function getRegistrationStatus(): ?RegistrationStatusType {
        return $this->registrationStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('registrationCount', $this->registrationCount);
        $writer->writeEnumValue('registrationStatus', $this->registrationStatus);
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
     * Sets the registrationCount property value. Provides the registration count for your tenant.
     *  @param int|null $value Value to set for the registrationCount property.
    */
    public function setRegistrationCount(?int $value ): void {
        $this->registrationCount = $value;
    }

    /**
     * Sets the registrationStatus property value. Represents the status of user registration. Possible values are: registered, enabled, capable, and mfaRegistered.
     *  @param RegistrationStatusType|null $value Value to set for the registrationStatus property.
    */
    public function setRegistrationStatus(?RegistrationStatusType $value ): void {
        $this->registrationStatus = $value;
    }

}
