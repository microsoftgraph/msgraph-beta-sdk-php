<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Property implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $aliases The aliases property
    */
    private ?array $aliases = null;
    
    /**
     * @var bool|null $isQueryable The isQueryable property
    */
    private ?bool $isQueryable = null;
    
    /**
     * @var bool|null $isRefinable The isRefinable property
    */
    private ?bool $isRefinable = null;
    
    /**
     * @var bool|null $isRetrievable The isRetrievable property
    */
    private ?bool $isRetrievable = null;
    
    /**
     * @var bool|null $isSearchable The isSearchable property
    */
    private ?bool $isSearchable = null;
    
    /**
     * @var array<string>|null $labels The labels property
    */
    private ?array $labels = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var PropertyType|null $type The type property
    */
    private ?PropertyType $type = null;
    
    /**
     * Instantiates a new property and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.property');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Property
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Property {
        return new Property();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the aliases property value. The aliases property
     * @return array<string>|null
    */
    public function getAliases(): ?array {
        return $this->aliases;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aliases' => function (ParseNode $n) use ($o) { $o->setAliases($n->getCollectionOfPrimitiveValues()); },
            'isQueryable' => function (ParseNode $n) use ($o) { $o->setIsQueryable($n->getBooleanValue()); },
            'isRefinable' => function (ParseNode $n) use ($o) { $o->setIsRefinable($n->getBooleanValue()); },
            'isRetrievable' => function (ParseNode $n) use ($o) { $o->setIsRetrievable($n->getBooleanValue()); },
            'isSearchable' => function (ParseNode $n) use ($o) { $o->setIsSearchable($n->getBooleanValue()); },
            'labels' => function (ParseNode $n) use ($o) { $o->setLabels($n->getCollectionOfPrimitiveValues()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getEnumValue(PropertyType::class)); },
        ];
    }

    /**
     * Gets the isQueryable property value. The isQueryable property
     * @return bool|null
    */
    public function getIsQueryable(): ?bool {
        return $this->isQueryable;
    }

    /**
     * Gets the isRefinable property value. The isRefinable property
     * @return bool|null
    */
    public function getIsRefinable(): ?bool {
        return $this->isRefinable;
    }

    /**
     * Gets the isRetrievable property value. The isRetrievable property
     * @return bool|null
    */
    public function getIsRetrievable(): ?bool {
        return $this->isRetrievable;
    }

    /**
     * Gets the isSearchable property value. The isSearchable property
     * @return bool|null
    */
    public function getIsSearchable(): ?bool {
        return $this->isSearchable;
    }

    /**
     * Gets the labels property value. The labels property
     * @return array<string>|null
    */
    public function getLabels(): ?array {
        return $this->labels;
    }

    /**
     * Gets the name property value. The name property
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
     * Gets the type property value. The type property
     * @return PropertyType|null
    */
    public function getType(): ?PropertyType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('aliases', $this->aliases);
        $writer->writeBooleanValue('isQueryable', $this->isQueryable);
        $writer->writeBooleanValue('isRefinable', $this->isRefinable);
        $writer->writeBooleanValue('isRetrievable', $this->isRetrievable);
        $writer->writeBooleanValue('isSearchable', $this->isSearchable);
        $writer->writeCollectionOfPrimitiveValues('labels', $this->labels);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('type', $this->type);
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
     * Sets the aliases property value. The aliases property
     *  @param array<string>|null $value Value to set for the aliases property.
    */
    public function setAliases(?array $value ): void {
        $this->aliases = $value;
    }

    /**
     * Sets the isQueryable property value. The isQueryable property
     *  @param bool|null $value Value to set for the isQueryable property.
    */
    public function setIsQueryable(?bool $value ): void {
        $this->isQueryable = $value;
    }

    /**
     * Sets the isRefinable property value. The isRefinable property
     *  @param bool|null $value Value to set for the isRefinable property.
    */
    public function setIsRefinable(?bool $value ): void {
        $this->isRefinable = $value;
    }

    /**
     * Sets the isRetrievable property value. The isRetrievable property
     *  @param bool|null $value Value to set for the isRetrievable property.
    */
    public function setIsRetrievable(?bool $value ): void {
        $this->isRetrievable = $value;
    }

    /**
     * Sets the isSearchable property value. The isSearchable property
     *  @param bool|null $value Value to set for the isSearchable property.
    */
    public function setIsSearchable(?bool $value ): void {
        $this->isSearchable = $value;
    }

    /**
     * Sets the labels property value. The labels property
     *  @param array<string>|null $value Value to set for the labels property.
    */
    public function setLabels(?array $value ): void {
        $this->labels = $value;
    }

    /**
     * Sets the name property value. The name property
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
     * Sets the type property value. The type property
     *  @param PropertyType|null $value Value to set for the type property.
    */
    public function setType(?PropertyType $value ): void {
        $this->type = $value;
    }

}
