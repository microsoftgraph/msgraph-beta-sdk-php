<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationStrengthUsage implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<ConditionalAccessPolicy>|null $mfa The mfa property
    */
    private ?array $mfa = null;
    
    /**
     * @var array<ConditionalAccessPolicy>|null $none The none property
    */
    private ?array $none = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new authenticationStrengthUsage and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.authenticationStrengthUsage');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationStrengthUsage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationStrengthUsage {
        return new AuthenticationStrengthUsage();
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
            'mfa' => function (ParseNode $n) use ($o) { $o->setMfa($n->getCollectionOfObjectValues(array(ConditionalAccessPolicy::class, 'createFromDiscriminatorValue'))); },
            'none' => function (ParseNode $n) use ($o) { $o->setNone($n->getCollectionOfObjectValues(array(ConditionalAccessPolicy::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the mfa property value. The mfa property
     * @return array<ConditionalAccessPolicy>|null
    */
    public function getMfa(): ?array {
        return $this->mfa;
    }

    /**
     * Gets the none property value. The none property
     * @return array<ConditionalAccessPolicy>|null
    */
    public function getNone(): ?array {
        return $this->none;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('mfa', $this->mfa);
        $writer->writeCollectionOfObjectValues('none', $this->none);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the mfa property value. The mfa property
     *  @param array<ConditionalAccessPolicy>|null $value Value to set for the mfa property.
    */
    public function setMfa(?array $value ): void {
        $this->mfa = $value;
    }

    /**
     * Sets the none property value. The none property
     *  @param array<ConditionalAccessPolicy>|null $value Value to set for the none property.
    */
    public function setNone(?array $value ): void {
        $this->none = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
