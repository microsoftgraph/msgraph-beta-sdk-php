<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppDependency extends MobileAppRelationship implements Parsable 
{
    /**
     * Instantiates a new MobileAppDependency and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.mobileAppDependency');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppDependency
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppDependency {
        return new MobileAppDependency();
    }

    /**
     * Gets the dependencyType property value. Indicates the dependency type associated with a relationship between two mobile apps.
     * @return MobileAppDependencyType|null
    */
    public function getDependencyType(): ?MobileAppDependencyType {
        return $this->getBackingStore()->get('dependencyType');
    }

    /**
     * Gets the dependentAppCount property value. The total number of apps that directly or indirectly depend on the parent app.
     * @return int|null
    */
    public function getDependentAppCount(): ?int {
        return $this->getBackingStore()->get('dependentAppCount');
    }

    /**
     * Gets the dependsOnAppCount property value. The total number of apps the child app directly or indirectly depends on.
     * @return int|null
    */
    public function getDependsOnAppCount(): ?int {
        return $this->getBackingStore()->get('dependsOnAppCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'dependencyType' => fn(ParseNode $n) => $o->setDependencyType($n->getEnumValue(MobileAppDependencyType::class)),
            'dependentAppCount' => fn(ParseNode $n) => $o->setDependentAppCount($n->getIntegerValue()),
            'dependsOnAppCount' => fn(ParseNode $n) => $o->setDependsOnAppCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('dependencyType', $this->getDependencyType());
        $writer->writeIntegerValue('dependentAppCount', $this->getDependentAppCount());
        $writer->writeIntegerValue('dependsOnAppCount', $this->getDependsOnAppCount());
    }

    /**
     * Sets the dependencyType property value. Indicates the dependency type associated with a relationship between two mobile apps.
     *  @param MobileAppDependencyType|null $value Value to set for the dependencyType property.
    */
    public function setDependencyType(?MobileAppDependencyType $value): void {
        $this->getBackingStore()->set('dependencyType', $value);
    }

    /**
     * Sets the dependentAppCount property value. The total number of apps that directly or indirectly depend on the parent app.
     *  @param int|null $value Value to set for the dependentAppCount property.
    */
    public function setDependentAppCount(?int $value): void {
        $this->getBackingStore()->set('dependentAppCount', $value);
    }

    /**
     * Sets the dependsOnAppCount property value. The total number of apps the child app directly or indirectly depends on.
     *  @param int|null $value Value to set for the dependsOnAppCount property.
    */
    public function setDependsOnAppCount(?int $value): void {
        $this->getBackingStore()->set('dependsOnAppCount', $value);
    }

}
