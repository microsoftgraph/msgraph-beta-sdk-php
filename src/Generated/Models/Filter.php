<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Filter implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<FilterGroup>|null $categoryFilterGroups *Experimental* Filter group set used to decide whether given object belongs and should be processed as part of this object mapping. An object is considered in scope if ANY of the groups in the collection is evaluated to true. */
    private ?array $categoryFilterGroups = null;
    
    /** @var array<FilterGroup>|null $groups Filter group set used to decide whether given object is in scope for provisioning. This is the filter which should be used in most cases. If an object used to satisfy this filter at a given moment, and then the object or the filter was changed so that filter is not satisfied any longer, such object will get de-provisioned'. An object is considered in scope if ANY of the groups in the collection is evaluated to true. */
    private ?array $groups = null;
    
    /** @var array<FilterGroup>|null $inputFilterGroups *Experimental* Filter group set used to filter out objects at the early stage of reading them from the directory. If an object doesn't satisfy this filter it will not be processed further. Important to understand is that if an object used to satisfy this filter at a given moment, and then the object or the filter was changed so that filter is no longer satisfied, such object will NOT get de-provisioned. An object is considered in scope if ANY of the groups in the collection is evaluated to true. */
    private ?array $inputFilterGroups = null;
    
    /**
     * Instantiates a new filter and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Filter
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Filter {
        return new Filter();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the categoryFilterGroups property value. *Experimental* Filter group set used to decide whether given object belongs and should be processed as part of this object mapping. An object is considered in scope if ANY of the groups in the collection is evaluated to true.
     * @return array<FilterGroup>|null
    */
    public function getCategoryFilterGroups(): ?array {
        return $this->categoryFilterGroups;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'categoryFilterGroups' => function (self $o, ParseNode $n) { $o->setCategoryFilterGroups($n->getCollectionOfObjectValues(FilterGroup::class)); },
            'groups' => function (self $o, ParseNode $n) { $o->setGroups($n->getCollectionOfObjectValues(FilterGroup::class)); },
            'inputFilterGroups' => function (self $o, ParseNode $n) { $o->setInputFilterGroups($n->getCollectionOfObjectValues(FilterGroup::class)); },
        ];
    }

    /**
     * Gets the groups property value. Filter group set used to decide whether given object is in scope for provisioning. This is the filter which should be used in most cases. If an object used to satisfy this filter at a given moment, and then the object or the filter was changed so that filter is not satisfied any longer, such object will get de-provisioned'. An object is considered in scope if ANY of the groups in the collection is evaluated to true.
     * @return array<FilterGroup>|null
    */
    public function getGroups(): ?array {
        return $this->groups;
    }

    /**
     * Gets the inputFilterGroups property value. *Experimental* Filter group set used to filter out objects at the early stage of reading them from the directory. If an object doesn't satisfy this filter it will not be processed further. Important to understand is that if an object used to satisfy this filter at a given moment, and then the object or the filter was changed so that filter is no longer satisfied, such object will NOT get de-provisioned. An object is considered in scope if ANY of the groups in the collection is evaluated to true.
     * @return array<FilterGroup>|null
    */
    public function getInputFilterGroups(): ?array {
        return $this->inputFilterGroups;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('categoryFilterGroups', $this->categoryFilterGroups);
        $writer->writeCollectionOfObjectValues('groups', $this->groups);
        $writer->writeCollectionOfObjectValues('inputFilterGroups', $this->inputFilterGroups);
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
     * Sets the categoryFilterGroups property value. *Experimental* Filter group set used to decide whether given object belongs and should be processed as part of this object mapping. An object is considered in scope if ANY of the groups in the collection is evaluated to true.
     *  @param array<FilterGroup>|null $value Value to set for the categoryFilterGroups property.
    */
    public function setCategoryFilterGroups(?array $value ): void {
        $this->categoryFilterGroups = $value;
    }

    /**
     * Sets the groups property value. Filter group set used to decide whether given object is in scope for provisioning. This is the filter which should be used in most cases. If an object used to satisfy this filter at a given moment, and then the object or the filter was changed so that filter is not satisfied any longer, such object will get de-provisioned'. An object is considered in scope if ANY of the groups in the collection is evaluated to true.
     *  @param array<FilterGroup>|null $value Value to set for the groups property.
    */
    public function setGroups(?array $value ): void {
        $this->groups = $value;
    }

    /**
     * Sets the inputFilterGroups property value. *Experimental* Filter group set used to filter out objects at the early stage of reading them from the directory. If an object doesn't satisfy this filter it will not be processed further. Important to understand is that if an object used to satisfy this filter at a given moment, and then the object or the filter was changed so that filter is no longer satisfied, such object will NOT get de-provisioned. An object is considered in scope if ANY of the groups in the collection is evaluated to true.
     *  @param array<FilterGroup>|null $value Value to set for the inputFilterGroups property.
    */
    public function setInputFilterGroups(?array $value ): void {
        $this->inputFilterGroups = $value;
    }

}
