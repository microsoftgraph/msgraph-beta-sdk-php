<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppSupersedence extends MobileAppRelationship implements Parsable 
{
    /**
     * @var int|null $supersededAppCount The total number of apps directly or indirectly superseded by the child app.
    */
    private ?int $supersededAppCount = null;
    
    /**
     * @var MobileAppSupersedenceType|null $supersedenceType Indicates the supersedence type associated with a relationship between two mobile apps.
    */
    private ?MobileAppSupersedenceType $supersedenceType = null;
    
    /**
     * @var int|null $supersedingAppCount The total number of apps directly or indirectly superseding the parent app.
    */
    private ?int $supersedingAppCount = null;
    
    /**
     * Instantiates a new MobileAppSupersedence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.mobileAppSupersedence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppSupersedence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppSupersedence {
        return new MobileAppSupersedence();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'supersededAppCount' => function (ParseNode $n) use ($o) { $o->setSupersededAppCount($n->getIntegerValue()); },
            'supersedenceType' => function (ParseNode $n) use ($o) { $o->setSupersedenceType($n->getEnumValue(MobileAppSupersedenceType::class)); },
            'supersedingAppCount' => function (ParseNode $n) use ($o) { $o->setSupersedingAppCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the supersededAppCount property value. The total number of apps directly or indirectly superseded by the child app.
     * @return int|null
    */
    public function getSupersededAppCount(): ?int {
        return $this->supersededAppCount;
    }

    /**
     * Gets the supersedenceType property value. Indicates the supersedence type associated with a relationship between two mobile apps.
     * @return MobileAppSupersedenceType|null
    */
    public function getSupersedenceType(): ?MobileAppSupersedenceType {
        return $this->supersedenceType;
    }

    /**
     * Gets the supersedingAppCount property value. The total number of apps directly or indirectly superseding the parent app.
     * @return int|null
    */
    public function getSupersedingAppCount(): ?int {
        return $this->supersedingAppCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('supersededAppCount', $this->supersededAppCount);
        $writer->writeEnumValue('supersedenceType', $this->supersedenceType);
        $writer->writeIntegerValue('supersedingAppCount', $this->supersedingAppCount);
    }

    /**
     * Sets the supersededAppCount property value. The total number of apps directly or indirectly superseded by the child app.
     *  @param int|null $value Value to set for the supersededAppCount property.
    */
    public function setSupersededAppCount(?int $value ): void {
        $this->supersededAppCount = $value;
    }

    /**
     * Sets the supersedenceType property value. Indicates the supersedence type associated with a relationship between two mobile apps.
     *  @param MobileAppSupersedenceType|null $value Value to set for the supersedenceType property.
    */
    public function setSupersedenceType(?MobileAppSupersedenceType $value ): void {
        $this->supersedenceType = $value;
    }

    /**
     * Sets the supersedingAppCount property value. The total number of apps directly or indirectly superseding the parent app.
     *  @param int|null $value Value to set for the supersedingAppCount property.
    */
    public function setSupersedingAppCount(?int $value ): void {
        $this->supersedingAppCount = $value;
    }

}
