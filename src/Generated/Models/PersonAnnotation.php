<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PersonAnnotation extends ItemFacet implements Parsable 
{
    /**
     * @var ItemBody|null $detail Contains the detail of the note itself.
    */
    private ?ItemBody $detail = null;
    
    /**
     * @var string|null $displayName Contains a friendly name for the note.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $thumbnailUrl The thumbnailUrl property
    */
    private ?string $thumbnailUrl = null;
    
    /**
     * Instantiates a new PersonAnnotation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.personAnnotation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PersonAnnotation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PersonAnnotation {
        return new PersonAnnotation();
    }

    /**
     * Gets the detail property value. Contains the detail of the note itself.
     * @return ItemBody|null
    */
    public function getDetail(): ?ItemBody {
        return $this->detail;
    }

    /**
     * Gets the displayName property value. Contains a friendly name for the note.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'detail' => function (ParseNode $n) use ($o) { $o->setDetail($n->getObjectValue(array(ItemBody::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'thumbnailUrl' => function (ParseNode $n) use ($o) { $o->setThumbnailUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the thumbnailUrl property value. The thumbnailUrl property
     * @return string|null
    */
    public function getThumbnailUrl(): ?string {
        return $this->thumbnailUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('detail', $this->detail);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('thumbnailUrl', $this->thumbnailUrl);
    }

    /**
     * Sets the detail property value. Contains the detail of the note itself.
     *  @param ItemBody|null $value Value to set for the detail property.
    */
    public function setDetail(?ItemBody $value ): void {
        $this->detail = $value;
    }

    /**
     * Sets the displayName property value. Contains a friendly name for the note.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the thumbnailUrl property value. The thumbnailUrl property
     *  @param string|null $value Value to set for the thumbnailUrl property.
    */
    public function setThumbnailUrl(?string $value ): void {
        $this->thumbnailUrl = $value;
    }

}
