<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServicePrincipalCreationPolicy extends PolicyBase 
{
    /** @var array<ServicePrincipalCreationConditionSet>|null $excludes The excludes property */
    private ?array $excludes = null;
    
    /** @var array<ServicePrincipalCreationConditionSet>|null $includes The includes property */
    private ?array $includes = null;
    
    /** @var bool|null $isBuiltIn The isBuiltIn property */
    private ?bool $isBuiltIn = null;
    
    /**
     * Instantiates a new servicePrincipalCreationPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServicePrincipalCreationPolicy
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ServicePrincipalCreationPolicy {
        return new ServicePrincipalCreationPolicy();
    }

    /**
     * Gets the excludes property value. The excludes property
     * @return array<ServicePrincipalCreationConditionSet>|null
    */
    public function getExcludes(): ?array {
        return $this->excludes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'excludes' => function (self $o, ParseNode $n) { $o->setExcludes($n->getCollectionOfObjectValues(ServicePrincipalCreationConditionSet::class)); },
            'includes' => function (self $o, ParseNode $n) { $o->setIncludes($n->getCollectionOfObjectValues(ServicePrincipalCreationConditionSet::class)); },
            'isBuiltIn' => function (self $o, ParseNode $n) { $o->setIsBuiltIn($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the includes property value. The includes property
     * @return array<ServicePrincipalCreationConditionSet>|null
    */
    public function getIncludes(): ?array {
        return $this->includes;
    }

    /**
     * Gets the isBuiltIn property value. The isBuiltIn property
     * @return bool|null
    */
    public function getIsBuiltIn(): ?bool {
        return $this->isBuiltIn;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('excludes', $this->excludes);
        $writer->writeCollectionOfObjectValues('includes', $this->includes);
        $writer->writeBooleanValue('isBuiltIn', $this->isBuiltIn);
    }

    /**
     * Sets the excludes property value. The excludes property
     *  @param array<ServicePrincipalCreationConditionSet>|null $value Value to set for the excludes property.
    */
    public function setExcludes(?array $value ): void {
        $this->excludes = $value;
    }

    /**
     * Sets the includes property value. The includes property
     *  @param array<ServicePrincipalCreationConditionSet>|null $value Value to set for the includes property.
    */
    public function setIncludes(?array $value ): void {
        $this->includes = $value;
    }

    /**
     * Sets the isBuiltIn property value. The isBuiltIn property
     *  @param bool|null $value Value to set for the isBuiltIn property.
    */
    public function setIsBuiltIn(?bool $value ): void {
        $this->isBuiltIn = $value;
    }

}
