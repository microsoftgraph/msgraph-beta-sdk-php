<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExternalItem extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<Acl>|null $acl The acl property
    */
    private ?array $acl = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ExternalItemContent|null $content The content property
    */
    private ?ExternalItemContent $content = null;
    
    /**
     * @var Properties|null $properties The properties property
    */
    private ?Properties $properties = null;
    
    /**
     * Instantiates a new externalItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternalItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExternalItem {
        return new ExternalItem();
    }

    /**
     * Gets the acl property value. The acl property
     * @return array<Acl>|null
    */
    public function getAcl(): ?array {
        return $this->acl;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the content property value. The content property
     * @return ExternalItemContent|null
    */
    public function getContent(): ?ExternalItemContent {
        return $this->content;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'acl' => function (ParseNode $n) use ($o) { $o->setAcl($n->getCollectionOfObjectValues(array(Acl::class, 'createFromDiscriminatorValue'))); },
            'content' => function (ParseNode $n) use ($o) { $o->setContent($n->getObjectValue(array(ExternalItemContent::class, 'createFromDiscriminatorValue'))); },
            'properties' => function (ParseNode $n) use ($o) { $o->setProperties($n->getObjectValue(array(Properties::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the properties property value. The properties property
     * @return Properties|null
    */
    public function getProperties(): ?Properties {
        return $this->properties;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('acl', $this->acl);
        $writer->writeObjectValue('content', $this->content);
        $writer->writeObjectValue('properties', $this->properties);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the acl property value. The acl property
     *  @param array<Acl>|null $value Value to set for the acl property.
    */
    public function setAcl(?array $value ): void {
        $this->acl = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the content property value. The content property
     *  @param ExternalItemContent|null $value Value to set for the content property.
    */
    public function setContent(?ExternalItemContent $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the properties property value. The properties property
     *  @param Properties|null $value Value to set for the properties property.
    */
    public function setProperties(?Properties $value ): void {
        $this->properties = $value;
    }

}
