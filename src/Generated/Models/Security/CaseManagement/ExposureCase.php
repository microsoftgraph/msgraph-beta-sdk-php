<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ExposureCase extends EscapedCase implements Parsable 
{
    /**
     * Instantiates a new ExposureCase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.caseManagement.exposureCase');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExposureCase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExposureCase {
        return new ExposureCase();
    }

    /**
     * Gets the assignedTo property value. The assignedTo property
     * @return string|null
    */
    public function getAssignedTo(): ?string {
        $val = $this->getBackingStore()->get('assignedTo');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedTo'");
    }

    /**
     * Gets the automation property value. The automation property
     * @return ExposureCaseAutomation|null
    */
    public function getAutomation(): ?ExposureCaseAutomation {
        $val = $this->getBackingStore()->get('automation');
        if (is_null($val) || $val instanceof ExposureCaseAutomation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'automation'");
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the dueDateTime property value. The dueDateTime property
     * @return DateTime|null
    */
    public function getDueDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('dueDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dueDateTime'");
    }

    /**
     * Gets the emailNotificationRecipients property value. The emailNotificationRecipients property
     * @return array<string>|null
    */
    public function getEmailNotificationRecipients(): ?array {
        $val = $this->getBackingStore()->get('emailNotificationRecipients');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailNotificationRecipients'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedTo' => fn(ParseNode $n) => $o->setAssignedTo($n->getStringValue()),
            'automation' => fn(ParseNode $n) => $o->setAutomation($n->getObjectValue([ExposureCaseAutomation::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'dueDateTime' => fn(ParseNode $n) => $o->setDueDateTime($n->getDateTimeValue()),
            'emailNotificationRecipients' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setEmailNotificationRecipients($val);
            },
            'github' => fn(ParseNode $n) => $o->setGithub($n->getObjectValue([ExposureCaseGitHub::class, 'createFromDiscriminatorValue'])),
            'isGracePeriodEnabled' => fn(ParseNode $n) => $o->setIsGracePeriodEnabled($n->getBooleanValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getStringValue()),
            'seemplicity' => fn(ParseNode $n) => $o->setSeemplicity($n->getObjectValue([ExposureCaseSeemplicity::class, 'createFromDiscriminatorValue'])),
            'thirdPartyWorkItem' => fn(ParseNode $n) => $o->setThirdPartyWorkItem($n->getObjectValue([ThirdPartyWorkItem::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the github property value. The github property
     * @return ExposureCaseGitHub|null
    */
    public function getGithub(): ?ExposureCaseGitHub {
        $val = $this->getBackingStore()->get('github');
        if (is_null($val) || $val instanceof ExposureCaseGitHub) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'github'");
    }

    /**
     * Gets the isGracePeriodEnabled property value. The isGracePeriodEnabled property
     * @return bool|null
    */
    public function getIsGracePeriodEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isGracePeriodEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isGracePeriodEnabled'");
    }

    /**
     * Gets the priority property value. The priority property
     * @return string|null
    */
    public function getPriority(): ?string {
        $val = $this->getBackingStore()->get('priority');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priority'");
    }

    /**
     * Gets the seemplicity property value. The seemplicity property
     * @return ExposureCaseSeemplicity|null
    */
    public function getSeemplicity(): ?ExposureCaseSeemplicity {
        $val = $this->getBackingStore()->get('seemplicity');
        if (is_null($val) || $val instanceof ExposureCaseSeemplicity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'seemplicity'");
    }

    /**
     * Gets the thirdPartyWorkItem property value. The thirdPartyWorkItem property
     * @return ThirdPartyWorkItem|null
    */
    public function getThirdPartyWorkItem(): ?ThirdPartyWorkItem {
        $val = $this->getBackingStore()->get('thirdPartyWorkItem');
        if (is_null($val) || $val instanceof ThirdPartyWorkItem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'thirdPartyWorkItem'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignedTo', $this->getAssignedTo());
        $writer->writeObjectValue('automation', $this->getAutomation());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeDateTimeValue('dueDateTime', $this->getDueDateTime());
        $writer->writeCollectionOfPrimitiveValues('emailNotificationRecipients', $this->getEmailNotificationRecipients());
        $writer->writeObjectValue('github', $this->getGithub());
        $writer->writeBooleanValue('isGracePeriodEnabled', $this->getIsGracePeriodEnabled());
        $writer->writeStringValue('priority', $this->getPriority());
        $writer->writeObjectValue('seemplicity', $this->getSeemplicity());
        $writer->writeObjectValue('thirdPartyWorkItem', $this->getThirdPartyWorkItem());
    }

    /**
     * Sets the assignedTo property value. The assignedTo property
     * @param string|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?string $value): void {
        $this->getBackingStore()->set('assignedTo', $value);
    }

    /**
     * Sets the automation property value. The automation property
     * @param ExposureCaseAutomation|null $value Value to set for the automation property.
    */
    public function setAutomation(?ExposureCaseAutomation $value): void {
        $this->getBackingStore()->set('automation', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the dueDateTime property value. The dueDateTime property
     * @param DateTime|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('dueDateTime', $value);
    }

    /**
     * Sets the emailNotificationRecipients property value. The emailNotificationRecipients property
     * @param array<string>|null $value Value to set for the emailNotificationRecipients property.
    */
    public function setEmailNotificationRecipients(?array $value): void {
        $this->getBackingStore()->set('emailNotificationRecipients', $value);
    }

    /**
     * Sets the github property value. The github property
     * @param ExposureCaseGitHub|null $value Value to set for the github property.
    */
    public function setGithub(?ExposureCaseGitHub $value): void {
        $this->getBackingStore()->set('github', $value);
    }

    /**
     * Sets the isGracePeriodEnabled property value. The isGracePeriodEnabled property
     * @param bool|null $value Value to set for the isGracePeriodEnabled property.
    */
    public function setIsGracePeriodEnabled(?bool $value): void {
        $this->getBackingStore()->set('isGracePeriodEnabled', $value);
    }

    /**
     * Sets the priority property value. The priority property
     * @param string|null $value Value to set for the priority property.
    */
    public function setPriority(?string $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the seemplicity property value. The seemplicity property
     * @param ExposureCaseSeemplicity|null $value Value to set for the seemplicity property.
    */
    public function setSeemplicity(?ExposureCaseSeemplicity $value): void {
        $this->getBackingStore()->set('seemplicity', $value);
    }

    /**
     * Sets the thirdPartyWorkItem property value. The thirdPartyWorkItem property
     * @param ThirdPartyWorkItem|null $value Value to set for the thirdPartyWorkItem property.
    */
    public function setThirdPartyWorkItem(?ThirdPartyWorkItem $value): void {
        $this->getBackingStore()->set('thirdPartyWorkItem', $value);
    }

}
