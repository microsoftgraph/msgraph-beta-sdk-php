<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows10XCustomSubjectAlternativeName implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $name Custom SAN Name
    */
    private ?string $name = null;
    
    /**
     * @var SubjectAlternativeNameType|null $sanType Custom SAN Type. Possible values are: none, emailAddress, userPrincipalName, customAzureADAttribute, domainNameService, universalResourceIdentifier.
    */
    private ?SubjectAlternativeNameType $sanType = null;
    
    /**
     * Instantiates a new windows10XCustomSubjectAlternativeName and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10XCustomSubjectAlternativeName
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10XCustomSubjectAlternativeName {
        return new Windows10XCustomSubjectAlternativeName();
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
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'sanType' => function (ParseNode $n) use ($o) { $o->setSanType($n->getEnumValue(SubjectAlternativeNameType::class)); },
        ];
    }

    /**
     * Gets the name property value. Custom SAN Name
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the sanType property value. Custom SAN Type. Possible values are: none, emailAddress, userPrincipalName, customAzureADAttribute, domainNameService, universalResourceIdentifier.
     * @return SubjectAlternativeNameType|null
    */
    public function getSanType(): ?SubjectAlternativeNameType {
        return $this->sanType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('name', $this->name);
        $writer->writeEnumValue('sanType', $this->sanType);
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
     * Sets the name property value. Custom SAN Name
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the sanType property value. Custom SAN Type. Possible values are: none, emailAddress, userPrincipalName, customAzureADAttribute, domainNameService, universalResourceIdentifier.
     *  @param SubjectAlternativeNameType|null $value Value to set for the sanType property.
    */
    public function setSanType(?SubjectAlternativeNameType $value ): void {
        $this->sanType = $value;
    }

}
