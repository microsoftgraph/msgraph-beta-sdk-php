<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OrganizationalMessageVariant implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<OrganizationalMessageLocalizedText>|null $localizedTexts The list of localized texts for this variant
    */
    private ?array $localizedTexts = null;
    
    /**
     * @var string|null $name The name of the variant
    */
    private ?string $name = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $variantId A unique identifier for this variant
    */
    private ?string $variantId = null;
    
    /**
     * Instantiates a new organizationalMessageVariant and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.organizationalMessageVariant');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationalMessageVariant
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationalMessageVariant {
        return new OrganizationalMessageVariant();
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
            'localizedTexts' => function (ParseNode $n) use ($o) { $o->setLocalizedTexts($n->getCollectionOfObjectValues(array(OrganizationalMessageLocalizedText::class, 'createFromDiscriminatorValue'))); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'variantId' => function (ParseNode $n) use ($o) { $o->setVariantId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the localizedTexts property value. The list of localized texts for this variant
     * @return array<OrganizationalMessageLocalizedText>|null
    */
    public function getLocalizedTexts(): ?array {
        return $this->localizedTexts;
    }

    /**
     * Gets the name property value. The name of the variant
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the variantId property value. A unique identifier for this variant
     * @return string|null
    */
    public function getVariantId(): ?string {
        return $this->variantId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('localizedTexts', $this->localizedTexts);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('variantId', $this->variantId);
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
     * Sets the localizedTexts property value. The list of localized texts for this variant
     *  @param array<OrganizationalMessageLocalizedText>|null $value Value to set for the localizedTexts property.
    */
    public function setLocalizedTexts(?array $value ): void {
        $this->localizedTexts = $value;
    }

    /**
     * Sets the name property value. The name of the variant
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the variantId property value. A unique identifier for this variant
     *  @param string|null $value Value to set for the variantId property.
    */
    public function setVariantId(?string $value ): void {
        $this->variantId = $value;
    }

}
