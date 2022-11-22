<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServicePrincipalCreationPolicy extends PolicyBase implements Parsable 
{
    /**
     * Instantiates a new ServicePrincipalCreationPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.servicePrincipalCreationPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServicePrincipalCreationPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServicePrincipalCreationPolicy {
        return new ServicePrincipalCreationPolicy();
    }

    /**
     * Gets the excludes property value. The excludes property
     * @return array<ServicePrincipalCreationConditionSet>|null
    */
    public function getExcludes(): ?array {
        return $this->getBackingStore()->get('excludes');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'excludes' => fn(ParseNode $n) => $o->setExcludes($n->getCollectionOfObjectValues([ServicePrincipalCreationConditionSet::class, 'createFromDiscriminatorValue'])),
            'includes' => fn(ParseNode $n) => $o->setIncludes($n->getCollectionOfObjectValues([ServicePrincipalCreationConditionSet::class, 'createFromDiscriminatorValue'])),
            'isBuiltIn' => fn(ParseNode $n) => $o->setIsBuiltIn($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the includes property value. The includes property
     * @return array<ServicePrincipalCreationConditionSet>|null
    */
    public function getIncludes(): ?array {
        return $this->getBackingStore()->get('includes');
    }

    /**
     * Gets the isBuiltIn property value. The isBuiltIn property
     * @return bool|null
    */
    public function getIsBuiltIn(): ?bool {
        return $this->getBackingStore()->get('isBuiltIn');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('excludes', $this->getExcludes());
        $writer->writeCollectionOfObjectValues('includes', $this->getIncludes());
        $writer->writeBooleanValue('isBuiltIn', $this->getIsBuiltIn());
    }

    /**
     * Sets the excludes property value. The excludes property
     *  @param array<ServicePrincipalCreationConditionSet>|null $value Value to set for the excludes property.
    */
    public function setExcludes(?array $value): void {
        $this->getBackingStore()->set('excludes', $value);
    }

    /**
     * Sets the includes property value. The includes property
     *  @param array<ServicePrincipalCreationConditionSet>|null $value Value to set for the includes property.
    */
    public function setIncludes(?array $value): void {
        $this->getBackingStore()->set('includes', $value);
    }

    /**
     * Sets the isBuiltIn property value. The isBuiltIn property
     *  @param bool|null $value Value to set for the isBuiltIn property.
    */
    public function setIsBuiltIn(?bool $value): void {
        $this->getBackingStore()->set('isBuiltIn', $value);
    }

}
