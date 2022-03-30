<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MfaDetail implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $authDetail Indicates the MFA auth detail for the corresponding Sign-in activity when the MFA Required is 'Yes'. */
    private ?string $authDetail = null;
    
    /** @var string|null $authMethod Indicates the MFA Auth methods (SMS, Phone, Authenticator App are some of the value) for the corresponding sign-in activity when the MFA Required field is 'Yes'. */
    private ?string $authMethod = null;
    
    /**
     * Instantiates a new mfaDetail and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MfaDetail
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): MfaDetail {
        return new MfaDetail();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the authDetail property value. Indicates the MFA auth detail for the corresponding Sign-in activity when the MFA Required is 'Yes'.
     * @return string|null
    */
    public function getAuthDetail(): ?string {
        return $this->authDetail;
    }

    /**
     * Gets the authMethod property value. Indicates the MFA Auth methods (SMS, Phone, Authenticator App are some of the value) for the corresponding sign-in activity when the MFA Required field is 'Yes'.
     * @return string|null
    */
    public function getAuthMethod(): ?string {
        return $this->authMethod;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'authDetail' => function (self $o, ParseNode $n) { $o->setAuthDetail($n->getStringValue()); },
            'authMethod' => function (self $o, ParseNode $n) { $o->setAuthMethod($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('authDetail', $this->authDetail);
        $writer->writeStringValue('authMethod', $this->authMethod);
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
     * Sets the authDetail property value. Indicates the MFA auth detail for the corresponding Sign-in activity when the MFA Required is 'Yes'.
     *  @param string|null $value Value to set for the authDetail property.
    */
    public function setAuthDetail(?string $value ): void {
        $this->authDetail = $value;
    }

    /**
     * Sets the authMethod property value. Indicates the MFA Auth methods (SMS, Phone, Authenticator App are some of the value) for the corresponding sign-in activity when the MFA Required field is 'Yes'.
     *  @param string|null $value Value to set for the authMethod property.
    */
    public function setAuthMethod(?string $value ): void {
        $this->authMethod = $value;
    }

}
