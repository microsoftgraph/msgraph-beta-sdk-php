<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExactDataMatchStoreColumn implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $ignoredDelimiters  */
    private ?array $ignoredDelimiters = null;
    
    /** @var bool|null $isCaseInsensitive  */
    private ?bool $isCaseInsensitive = null;
    
    /** @var bool|null $isSearchable  */
    private ?bool $isSearchable = null;
    
    /** @var string|null $name  */
    private ?string $name = null;
    
    /**
     * Instantiates a new exactDataMatchStoreColumn and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExactDataMatchStoreColumn
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ExactDataMatchStoreColumn {
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
        return  [
            'ignoredDelimiters' => function (self $o, ParseNode $n) { $o->setIgnoredDelimiters($n->getCollectionOfPrimitiveValues()); },
            'isCaseInsensitive' => function (self $o, ParseNode $n) { $o->setIsCaseInsensitive($n->getBooleanValue()); },
            'isSearchable' => function (self $o, ParseNode $n) { $o->setIsSearchable($n->getBooleanValue()); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the ignoredDelimiters property value. 
     * @return array<string>|null
    */
    public function getIgnoredDelimiters(): ?array {
        return $this->ignoredDelimiters;
    }

    /**
     * Gets the isCaseInsensitive property value. 
     * @return bool|null
    */
    public function getIsCaseInsensitive(): ?bool {
        return $this->isCaseInsensitive;
    }

    /**
     * Gets the isSearchable property value. 
     * @return bool|null
    */
    public function getIsSearchable(): ?bool {
        return $this->isSearchable;
    }

    /**
     * Gets the name property value. 
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
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
     * Sets the ignoredDelimiters property value. 
     *  @param array<string>|null $value Value to set for the ignoredDelimiters property.
    */
    public function setIgnoredDelimiters(?array $value ): void {
        $this->ignoredDelimiters = $value;
    }

    /**
     * Sets the isCaseInsensitive property value. 
     *  @param bool|null $value Value to set for the isCaseInsensitive property.
    */
    public function setIsCaseInsensitive(?bool $value ): void {
        $this->isCaseInsensitive = $value;
    }

    /**
     * Sets the isSearchable property value. 
     *  @param bool|null $value Value to set for the isSearchable property.
    */
    public function setIsSearchable(?bool $value ): void {
        $this->isSearchable = $value;
    }

    /**
     * Sets the name property value. 
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

}
