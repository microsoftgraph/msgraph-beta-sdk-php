<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppRelationship extends Entity implements Parsable 
{
    /**
     * @var string|null $targetDisplayName The target mobile app's display name.
    */
    private ?string $targetDisplayName = null;
    
    /**
     * @var string|null $targetDisplayVersion The target mobile app's display version.
    */
    private ?string $targetDisplayVersion = null;
    
    /**
     * @var string|null $targetId The target mobile app's app id.
    */
    private ?string $targetId = null;
    
    /**
     * @var string|null $targetPublisher The target mobile app's publisher.
    */
    private ?string $targetPublisher = null;
    
    /**
     * @var MobileAppRelationshipType|null $targetType Indicates whether the target of a relationship is the parent or the child in the relationship.
    */
    private ?MobileAppRelationshipType $targetType = null;
    
    /**
     * Instantiates a new mobileAppRelationship and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.mobileAppRelationship');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppRelationship
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppRelationship {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.mobileAppDependency': return new MobileAppDependency();
                case '#microsoft.graph.mobileAppSupersedence': return new MobileAppSupersedence();
            }
        }
        return new MobileAppRelationship();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'targetDisplayName' => function (ParseNode $n) use ($o) { $o->setTargetDisplayName($n->getStringValue()); },
            'targetDisplayVersion' => function (ParseNode $n) use ($o) { $o->setTargetDisplayVersion($n->getStringValue()); },
            'targetId' => function (ParseNode $n) use ($o) { $o->setTargetId($n->getStringValue()); },
            'targetPublisher' => function (ParseNode $n) use ($o) { $o->setTargetPublisher($n->getStringValue()); },
            'targetType' => function (ParseNode $n) use ($o) { $o->setTargetType($n->getEnumValue(MobileAppRelationshipType::class)); },
        ]);
    }

    /**
     * Gets the targetDisplayName property value. The target mobile app's display name.
     * @return string|null
    */
    public function getTargetDisplayName(): ?string {
        return $this->targetDisplayName;
    }

    /**
     * Gets the targetDisplayVersion property value. The target mobile app's display version.
     * @return string|null
    */
    public function getTargetDisplayVersion(): ?string {
        return $this->targetDisplayVersion;
    }

    /**
     * Gets the targetId property value. The target mobile app's app id.
     * @return string|null
    */
    public function getTargetId(): ?string {
        return $this->targetId;
    }

    /**
     * Gets the targetPublisher property value. The target mobile app's publisher.
     * @return string|null
    */
    public function getTargetPublisher(): ?string {
        return $this->targetPublisher;
    }

    /**
     * Gets the targetType property value. Indicates whether the target of a relationship is the parent or the child in the relationship.
     * @return MobileAppRelationshipType|null
    */
    public function getTargetType(): ?MobileAppRelationshipType {
        return $this->targetType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('targetDisplayName', $this->targetDisplayName);
        $writer->writeStringValue('targetDisplayVersion', $this->targetDisplayVersion);
        $writer->writeStringValue('targetId', $this->targetId);
        $writer->writeStringValue('targetPublisher', $this->targetPublisher);
        $writer->writeEnumValue('targetType', $this->targetType);
    }

    /**
     * Sets the targetDisplayName property value. The target mobile app's display name.
     *  @param string|null $value Value to set for the targetDisplayName property.
    */
    public function setTargetDisplayName(?string $value ): void {
        $this->targetDisplayName = $value;
    }

    /**
     * Sets the targetDisplayVersion property value. The target mobile app's display version.
     *  @param string|null $value Value to set for the targetDisplayVersion property.
    */
    public function setTargetDisplayVersion(?string $value ): void {
        $this->targetDisplayVersion = $value;
    }

    /**
     * Sets the targetId property value. The target mobile app's app id.
     *  @param string|null $value Value to set for the targetId property.
    */
    public function setTargetId(?string $value ): void {
        $this->targetId = $value;
    }

    /**
     * Sets the targetPublisher property value. The target mobile app's publisher.
     *  @param string|null $value Value to set for the targetPublisher property.
    */
    public function setTargetPublisher(?string $value ): void {
        $this->targetPublisher = $value;
    }

    /**
     * Sets the targetType property value. Indicates whether the target of a relationship is the parent or the child in the relationship.
     *  @param MobileAppRelationshipType|null $value Value to set for the targetType property.
    */
    public function setTargetType(?MobileAppRelationshipType $value ): void {
        $this->targetType = $value;
    }

}
