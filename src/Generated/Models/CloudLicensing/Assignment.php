<?php

namespace Microsoft\Graph\Beta\Generated\Models\CloudLicensing;

use Microsoft\Graph\Beta\Generated\Models\DirectoryObject;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Assignment extends Entity implements Parsable 
{
    /**
     * Instantiates a new Assignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Assignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Assignment {
        return new Assignment();
    }

    /**
     * Gets the allotment property value. The allotment from which licenses are assigned. Not nullable.
     * @return Allotment|null
    */
    public function getAllotment(): ?Allotment {
        $val = $this->getBackingStore()->get('allotment');
        if (is_null($val) || $val instanceof Allotment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allotment'");
    }

    /**
     * Gets the assignedTo property value. The assignedTo property
     * @return DirectoryObject|null
    */
    public function getAssignedTo(): ?DirectoryObject {
        $val = $this->getBackingStore()->get('assignedTo');
        if (is_null($val) || $val instanceof DirectoryObject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedTo'");
    }

    /**
     * Gets the disabledServicePlanIds property value. The list of disabled service plans for this assignment. Not nullable.
     * @return array<string>|null
    */
    public function getDisabledServicePlanIds(): ?array {
        $val = $this->getBackingStore()->get('disabledServicePlanIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disabledServicePlanIds'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allotment' => fn(ParseNode $n) => $o->setAllotment($n->getObjectValue([Allotment::class, 'createFromDiscriminatorValue'])),
            'assignedTo' => fn(ParseNode $n) => $o->setAssignedTo($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'disabledServicePlanIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDisabledServicePlanIds($val);
            },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('allotment', $this->getAllotment());
        $writer->writeObjectValue('assignedTo', $this->getAssignedTo());
        $writer->writeCollectionOfPrimitiveValues('disabledServicePlanIds', $this->getDisabledServicePlanIds());
    }

    /**
     * Sets the allotment property value. The allotment from which licenses are assigned. Not nullable.
     * @param Allotment|null $value Value to set for the allotment property.
    */
    public function setAllotment(?Allotment $value): void {
        $this->getBackingStore()->set('allotment', $value);
    }

    /**
     * Sets the assignedTo property value. The assignedTo property
     * @param DirectoryObject|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?DirectoryObject $value): void {
        $this->getBackingStore()->set('assignedTo', $value);
    }

    /**
     * Sets the disabledServicePlanIds property value. The list of disabled service plans for this assignment. Not nullable.
     * @param array<string>|null $value Value to set for the disabledServicePlanIds property.
    */
    public function setDisabledServicePlanIds(?array $value): void {
        $this->getBackingStore()->set('disabledServicePlanIds', $value);
    }

}
