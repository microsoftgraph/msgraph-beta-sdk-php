<?php

namespace Microsoft\Graph\Beta\Generated\Models\TermStore;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Store extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $defaultLanguageTag Default language of the term store.
    */
    private ?string $defaultLanguageTag = null;
    
    /**
     * @var array<Group>|null $groups Collection of all groups available in the term store.
    */
    private ?array $groups = null;
    
    /**
     * @var array<string>|null $languageTags List of languages for the term store.
    */
    private ?array $languageTags = null;
    
    /**
     * @var array<Set>|null $sets Collection of all sets available in the term store.
    */
    private ?array $sets = null;
    
    /**
     * Instantiates a new store and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Store
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Store {
        return new Store();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the defaultLanguageTag property value. Default language of the term store.
     * @return string|null
    */
    public function getDefaultLanguageTag(): ?string {
        return $this->defaultLanguageTag;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultLanguageTag' => function (ParseNode $n) use ($o) { $o->setDefaultLanguageTag($n->getStringValue()); },
            'groups' => function (ParseNode $n) use ($o) { $o->setGroups($n->getCollectionOfObjectValues(array(Group::class, 'createFromDiscriminatorValue'))); },
            'languageTags' => function (ParseNode $n) use ($o) { $o->setLanguageTags($n->getCollectionOfPrimitiveValues()); },
            'sets' => function (ParseNode $n) use ($o) { $o->setSets($n->getCollectionOfObjectValues(array(Set::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the groups property value. Collection of all groups available in the term store.
     * @return array<Group>|null
    */
    public function getGroups(): ?array {
        return $this->groups;
    }

    /**
     * Gets the languageTags property value. List of languages for the term store.
     * @return array<string>|null
    */
    public function getLanguageTags(): ?array {
        return $this->languageTags;
    }

    /**
     * Gets the sets property value. Collection of all sets available in the term store.
     * @return array<Set>|null
    */
    public function getSets(): ?array {
        return $this->sets;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('defaultLanguageTag', $this->defaultLanguageTag);
        $writer->writeCollectionOfObjectValues('groups', $this->groups);
        $writer->writeCollectionOfPrimitiveValues('languageTags', $this->languageTags);
        $writer->writeCollectionOfObjectValues('sets', $this->sets);
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
     * Sets the defaultLanguageTag property value. Default language of the term store.
     *  @param string|null $value Value to set for the defaultLanguageTag property.
    */
    public function setDefaultLanguageTag(?string $value ): void {
        $this->defaultLanguageTag = $value;
    }

    /**
     * Sets the groups property value. Collection of all groups available in the term store.
     *  @param array<Group>|null $value Value to set for the groups property.
    */
    public function setGroups(?array $value ): void {
        $this->groups = $value;
    }

    /**
     * Sets the languageTags property value. List of languages for the term store.
     *  @param array<string>|null $value Value to set for the languageTags property.
    */
    public function setLanguageTags(?array $value ): void {
        $this->languageTags = $value;
    }

    /**
     * Sets the sets property value. Collection of all sets available in the term store.
     *  @param array<Set>|null $value Value to set for the sets property.
    */
    public function setSets(?array $value ): void {
        $this->sets = $value;
    }

}
