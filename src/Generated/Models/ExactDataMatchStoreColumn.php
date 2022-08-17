<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExactDataMatchStoreColumn implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $ignoredDelimiters The ignoredDelimiters property
    */
    private ?array $ignoredDelimiters = null;
    
    /**
     * @var bool|null $isCaseInsensitive The isCaseInsensitive property
    */
    private ?bool $isCaseInsensitive = null;
    
    /**
     * @var bool|null $isSearchable The isSearchable property
    */
    private ?bool $isSearchable = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new exactDataMatchStoreColumn and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.exactDataMatchStoreColumn');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExactDataMatchStoreColumn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExactDataMatchStoreColumn {
        return new ExactDataMatchStoreColumn();
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
            'ignoredDelimiters' => function (ParseNode $n) use ($o) { $o->setIgnoredDelimiters($n->getCollectionOfPrimitiveValues()); },
            'isCaseInsensitive' => function (ParseNode $n) use ($o) { $o->setIsCaseInsensitive($n->getBooleanValue()); },
            'isSearchable' => function (ParseNode $n) use ($o) { $o->setIsSearchable($n->getBooleanValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the ignoredDelimiters property value. The ignoredDelimiters property
     * @return array<string>|null
    */
    public function getIgnoredDelimiters(): ?array {
        return $this->ignoredDelimiters;
    }

    /**
     * Gets the isCaseInsensitive property value. The isCaseInsensitive property
     * @return bool|null
    */
    public function getIsCaseInsensitive(): ?bool {
        return $this->isCaseInsensitive;
    }

    /**
     * Gets the isSearchable property value. The isSearchable property
     * @return bool|null
    */
    public function getIsSearchable(): ?bool {
        return $this->isSearchable;
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('ignoredDelimiters', $this->ignoredDelimiters);
        $writer->writeBooleanValue('isCaseInsensitive', $this->isCaseInsensitive);
        $writer->writeBooleanValue('isSearchable', $this->isSearchable);
        $writer->writeStringValue('name', $this->name);
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
     * Sets the ignoredDelimiters property value. The ignoredDelimiters property
     *  @param array<string>|null $value Value to set for the ignoredDelimiters property.
    */
    public function setIgnoredDelimiters(?array $value ): void {
        $this->ignoredDelimiters = $value;
    }

    /**
     * Sets the isCaseInsensitive property value. The isCaseInsensitive property
     *  @param bool|null $value Value to set for the isCaseInsensitive property.
    */
    public function setIsCaseInsensitive(?bool $value ): void {
        $this->isCaseInsensitive = $value;
    }

    /**
     * Sets the isSearchable property value. The isSearchable property
     *  @param bool|null $value Value to set for the isSearchable property.
    */
    public function setIsSearchable(?bool $value ): void {
        $this->isSearchable = $value;
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

}
