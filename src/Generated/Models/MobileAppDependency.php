<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppDependency extends MobileAppRelationship implements Parsable 
{
    /**
     * @var MobileAppDependencyType|null $dependencyType The type of dependency relationship between the parent and child apps. Possible values are: detect, autoInstall.
    */
    private ?MobileAppDependencyType $dependencyType = null;
    
    /**
     * @var int|null $dependentAppCount The total number of apps that directly or indirectly depend on the parent app.
    */
    private ?int $dependentAppCount = null;
    
    /**
     * @var int|null $dependsOnAppCount The total number of apps the child app directly or indirectly depends on.
    */
    private ?int $dependsOnAppCount = null;
    
    /**
     * Instantiates a new MobileAppDependency and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * Gets the dependencyType property value. The type of dependency relationship between the parent and child apps. Possible values are: detect, autoInstall.
     * @return MobileAppDependencyType|null
    */
    public function getDependencyType(): ?MobileAppDependencyType {
        return $this->dependencyType;
    }

    /**
     * Gets the dependentAppCount property value. The total number of apps that directly or indirectly depend on the parent app.
     * @return int|null
    */
    public function getDependentAppCount(): ?int {
        return $this->dependentAppCount;
    }

    /**
     * Gets the dependsOnAppCount property value. The total number of apps the child app directly or indirectly depends on.
     * @return int|null
    */
    public function getDependsOnAppCount(): ?int {
        return $this->dependsOnAppCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'dependencyType' => function (ParseNode $n) use ($o) { $o->setDependencyType($n->getEnumValue(MobileAppDependencyType::class)); },
            'dependentAppCount' => function (ParseNode $n) use ($o) { $o->setDependentAppCount($n->getIntegerValue()); },
            'dependsOnAppCount' => function (ParseNode $n) use ($o) { $o->setDependsOnAppCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('dependencyType', $this->dependencyType);
        $writer->writeIntegerValue('dependentAppCount', $this->dependentAppCount);
        $writer->writeIntegerValue('dependsOnAppCount', $this->dependsOnAppCount);
    }

    /**
     * Sets the dependencyType property value. The type of dependency relationship between the parent and child apps. Possible values are: detect, autoInstall.
     *  @param MobileAppDependencyType|null $value Value to set for the dependencyType property.
    */
    public function setDependencyType(?MobileAppDependencyType $value ): void {
        $this->dependencyType = $value;
    }

    /**
     * Sets the dependentAppCount property value. The total number of apps that directly or indirectly depend on the parent app.
     *  @param int|null $value Value to set for the dependentAppCount property.
    */
    public function setDependentAppCount(?int $value ): void {
        $this->dependentAppCount = $value;
    }

    /**
     * Sets the dependsOnAppCount property value. The total number of apps the child app directly or indirectly depends on.
     *  @param int|null $value Value to set for the dependsOnAppCount property.
    */
    public function setDependsOnAppCount(?int $value ): void {
        $this->dependsOnAppCount = $value;
    }

}
