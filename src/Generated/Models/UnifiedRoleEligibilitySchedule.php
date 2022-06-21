<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleEligibilitySchedule extends UnifiedRoleScheduleBase implements Parsable 
{
    /**
     * @var string|null $memberType Membership type of the eligible assignment. It can either be Inherited, Direct, or Group.
    */
    private ?string $memberType = null;
    
    /**
     * @var RequestSchedule|null $scheduleInfo The schedule object of the eligible role assignment request.
    */
    private ?RequestSchedule $scheduleInfo = null;
    
    /**
     * Instantiates a new unifiedRoleEligibilitySchedule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleEligibilitySchedule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleEligibilitySchedule {
        return new UnifiedRoleEligibilitySchedule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'memberType' => function (ParseNode $n) use ($o) { $o->setMemberType($n->getStringValue()); },
            'scheduleInfo' => function (ParseNode $n) use ($o) { $o->setScheduleInfo($n->getObjectValue(array(RequestSchedule::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the memberType property value. Membership type of the eligible assignment. It can either be Inherited, Direct, or Group.
     * @return string|null
    */
    public function getMemberType(): ?string {
        return $this->memberType;
    }

    /**
     * Gets the scheduleInfo property value. The schedule object of the eligible role assignment request.
     * @return RequestSchedule|null
    */
    public function getScheduleInfo(): ?RequestSchedule {
        return $this->scheduleInfo;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('memberType', $this->memberType);
        $writer->writeObjectValue('scheduleInfo', $this->scheduleInfo);
    }

    /**
     * Sets the memberType property value. Membership type of the eligible assignment. It can either be Inherited, Direct, or Group.
     *  @param string|null $value Value to set for the memberType property.
    */
    public function setMemberType(?string $value ): void {
        $this->memberType = $value;
    }

    /**
     * Sets the scheduleInfo property value. The schedule object of the eligible role assignment request.
     *  @param RequestSchedule|null $value Value to set for the scheduleInfo property.
    */
    public function setScheduleInfo(?RequestSchedule $value ): void {
        $this->scheduleInfo = $value;
    }

}
