<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationContext implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var AuthenticationContextDetail|null $detail Describes how the conditional access authentication context was triggered. A value of previouslySatisfied means the auth context was because the user already satisfied the requirements for that authentication context in some previous authentication event. A value of required means the user had to meet the authentication context requirement as part of the sign-in flow. The possible values are: required, previouslySatisfied, notApplicable, unknownFutureValue. */
    private ?AuthenticationContextDetail $detail = null;
    
    /** @var string|null $id The identifier of a authentication context in your tenant. */
    private ?string $id = null;
    
    /**
     * Instantiates a new authenticationContext and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationContext
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationContext {
        return new AuthenticationContext();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the detail property value. Describes how the conditional access authentication context was triggered. A value of previouslySatisfied means the auth context was because the user already satisfied the requirements for that authentication context in some previous authentication event. A value of required means the user had to meet the authentication context requirement as part of the sign-in flow. The possible values are: required, previouslySatisfied, notApplicable, unknownFutureValue.
     * @return AuthenticationContextDetail|null
    */
    public function getDetail(): ?AuthenticationContextDetail {
        return $this->detail;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'detail' => function (self $o, ParseNode $n) { $o->setDetail($n->getEnumValue(AuthenticationContextDetail::class)); },
            'id' => function (self $o, ParseNode $n) { $o->setId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the id property value. The identifier of a authentication context in your tenant.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('detail', $this->detail);
        $writer->writeStringValue('id', $this->id);
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
     * Sets the detail property value. Describes how the conditional access authentication context was triggered. A value of previouslySatisfied means the auth context was because the user already satisfied the requirements for that authentication context in some previous authentication event. A value of required means the user had to meet the authentication context requirement as part of the sign-in flow. The possible values are: required, previouslySatisfied, notApplicable, unknownFutureValue.
     *  @param AuthenticationContextDetail|null $value Value to set for the detail property.
    */
    public function setDetail(?AuthenticationContextDetail $value ): void {
        $this->detail = $value;
    }

    /**
     * Sets the id property value. The identifier of a authentication context in your tenant.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

}
