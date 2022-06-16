<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PersonInterest extends ItemFacet 
{
    /** @var array<string>|null $categories Contains categories a user has associated with the interest (for example, personal, recipies). */
    private ?array $categories = null;
    
    /** @var array<string>|null $collaborationTags Contains experience scenario tags a user has associated with the interest. Allowed values in the collection are: askMeAbout, ableToMentor, wantsToLearn, wantsToImprove. */
    private ?array $collaborationTags = null;
    
    /** @var string|null $description Contains a description of the interest. */
    private ?string $description = null;
    
    /** @var string|null $displayName Contains a friendly name for the interest. */
    private ?string $displayName = null;
    
    /** @var string|null $thumbnailUrl The thumbnailUrl property */
    private ?string $thumbnailUrl = null;
    
    /** @var string|null $webUrl Contains a link to a web page or resource about the interest. */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new personInterest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PersonInterest
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PersonInterest {
        return new PersonInterest();
    }

    /**
     * Gets the categories property value. Contains categories a user has associated with the interest (for example, personal, recipies).
     * @return array<string>|null
    */
    public function getCategories(): ?array {
        return $this->categories;
    }

    /**
     * Gets the collaborationTags property value. Contains experience scenario tags a user has associated with the interest. Allowed values in the collection are: askMeAbout, ableToMentor, wantsToLearn, wantsToImprove.
     * @return array<string>|null
    */
    public function getCollaborationTags(): ?array {
        return $this->collaborationTags;
    }

    /**
     * Gets the description property value. Contains a description of the interest.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Contains a friendly name for the interest.
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
        return array_merge(parent::getFieldDeserializers(), [
            'categories' => function (self $o, ParseNode $n) { $o->setCategories($n->getCollectionOfPrimitiveValues()); },
            'collaborationTags' => function (self $o, ParseNode $n) { $o->setCollaborationTags($n->getCollectionOfPrimitiveValues()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'thumbnailUrl' => function (self $o, ParseNode $n) { $o->setThumbnailUrl($n->getStringValue()); },
            'webUrl' => function (self $o, ParseNode $n) { $o->setWebUrl($n->getStringValue()); },
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
     * Gets the webUrl property value. Contains a link to a web page or resource about the interest.
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
        $writer->writeCollectionOfPrimitiveValues('collaborationTags', $this->collaborationTags);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('thumbnailUrl', $this->thumbnailUrl);
        $writer->writeStringValue('webUrl', $this->webUrl);
    }

    /**
     * Sets the categories property value. Contains categories a user has associated with the interest (for example, personal, recipies).
     *  @param array<string>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value ): void {
        $this->categories = $value;
    }

    /**
     * Sets the collaborationTags property value. Contains experience scenario tags a user has associated with the interest. Allowed values in the collection are: askMeAbout, ableToMentor, wantsToLearn, wantsToImprove.
     *  @param array<string>|null $value Value to set for the collaborationTags property.
    */
    public function setCollaborationTags(?array $value ): void {
        $this->collaborationTags = $value;
    }

    /**
     * Sets the description property value. Contains a description of the interest.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Contains a friendly name for the interest.
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
     * Sets the webUrl property value. Contains a link to a web page or resource about the interest.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
