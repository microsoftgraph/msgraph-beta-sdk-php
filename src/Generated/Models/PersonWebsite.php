<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PersonWebsite extends ItemFacet implements Parsable 
{
    /**
     * @var array<string>|null $categories Contains categories a user has associated with the website (for example, personal, recipes).
    */
    private ?array $categories = null;
    
    /**
     * @var string|null $description Contains a description of the website.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Contains a friendly name for the website.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $thumbnailUrl The thumbnailUrl property
    */
    private ?string $thumbnailUrl = null;
    
    /**
     * @var string|null $webUrl Contains a link to the website itself.
    */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new PersonWebsite and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.personWebsite');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PersonWebsite
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PersonWebsite {
        return new PersonWebsite();
    }

    /**
     * Gets the categories property value. Contains categories a user has associated with the website (for example, personal, recipes).
     * @return array<string>|null
    */
    public function getCategories(): ?array {
        return $this->categories;
    }

    /**
     * Gets the description property value. Contains a description of the website.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Contains a friendly name for the website.
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
            'categories' => function (ParseNode $n) use ($o) { $o->setCategories($n->getCollectionOfPrimitiveValues()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'thumbnailUrl' => function (ParseNode $n) use ($o) { $o->setThumbnailUrl($n->getStringValue()); },
            'webUrl' => function (ParseNode $n) use ($o) { $o->setWebUrl($n->getStringValue()); },
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
     * Gets the webUrl property value. Contains a link to the website itself.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->webUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('categories', $this->categories);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('thumbnailUrl', $this->thumbnailUrl);
        $writer->writeStringValue('webUrl', $this->webUrl);
    }

    /**
     * Sets the categories property value. Contains categories a user has associated with the website (for example, personal, recipes).
     *  @param array<string>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value ): void {
        $this->categories = $value;
    }

    /**
     * Sets the description property value. Contains a description of the website.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Contains a friendly name for the website.
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

    /**
     * Sets the webUrl property value. Contains a link to the website itself.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
