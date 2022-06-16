<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceConfigurationUserStateSummary extends Entity 
{
    /** @var int|null $compliantUserCount Number of compliant users */
    private ?int $compliantUserCount = null;
    
    /** @var int|null $conflictUserCount Number of conflict users */
    private ?int $conflictUserCount = null;
    
    /** @var int|null $errorUserCount Number of error users */
    private ?int $errorUserCount = null;
    
    /** @var int|null $nonCompliantUserCount Number of NonCompliant users */
    private ?int $nonCompliantUserCount = null;
    
    /** @var int|null $notApplicableUserCount Number of not applicable users */
    private ?int $notApplicableUserCount = null;
    
    /** @var int|null $remediatedUserCount Number of remediated users */
    private ?int $remediatedUserCount = null;
    
    /** @var int|null $unknownUserCount Number of unknown users */
    private ?int $unknownUserCount = null;
    
    /**
     * Instantiates a new deviceConfigurationUserStateSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceConfigurationUserStateSummary
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceConfigurationUserStateSummary {
        return new DeviceConfigurationUserStateSummary();
    }

    /**
     * Gets the compliantUserCount property value. Number of compliant users
     * @return int|null
    */
    public function getCompliantUserCount(): ?int {
        return $this->compliantUserCount;
    }

    /**
     * Gets the conflictUserCount property value. Number of conflict users
     * @return int|null
    */
    public function getConflictUserCount(): ?int {
        return $this->conflictUserCount;
    }

    /**
     * Gets the errorUserCount property value. Number of error users
     * @return int|null
    */
    public function getErrorUserCount(): ?int {
        return $this->errorUserCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'compliantUserCount' => function (self $o, ParseNode $n) { $o->setCompliantUserCount($n->getIntegerValue()); },
            'conflictUserCount' => function (self $o, ParseNode $n) { $o->setConflictUserCount($n->getIntegerValue()); },
            'errorUserCount' => function (self $o, ParseNode $n) { $o->setErrorUserCount($n->getIntegerValue()); },
            'nonCompliantUserCount' => function (self $o, ParseNode $n) { $o->setNonCompliantUserCount($n->getIntegerValue()); },
            'notApplicableUserCount' => function (self $o, ParseNode $n) { $o->setNotApplicableUserCount($n->getIntegerValue()); },
            'remediatedUserCount' => function (self $o, ParseNode $n) { $o->setRemediatedUserCount($n->getIntegerValue()); },
            'unknownUserCount' => function (self $o, ParseNode $n) { $o->setUnknownUserCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the nonCompliantUserCount property value. Number of NonCompliant users
     * @return int|null
    */
    public function getNonCompliantUserCount(): ?int {
        return $this->nonCompliantUserCount;
    }

    /**
     * Gets the notApplicableUserCount property value. Number of not applicable users
     * @return int|null
    */
    public function getNotApplicableUserCount(): ?int {
        return $this->notApplicableUserCount;
    }

    /**
     * Gets the remediatedUserCount property value. Number of remediated users
     * @return int|null
    */
    public function getRemediatedUserCount(): ?int {
        return $this->remediatedUserCount;
    }

    /**
     * Gets the unknownUserCount property value. Number of unknown users
     * @return int|null
    */
    public function getUnknownUserCount(): ?int {
        return $this->unknownUserCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('compliantUserCount', $this->compliantUserCount);
        $writer->writeIntegerValue('conflictUserCount', $this->conflictUserCount);
        $writer->writeIntegerValue('errorUserCount', $this->errorUserCount);
        $writer->writeIntegerValue('nonCompliantUserCount', $this->nonCompliantUserCount);
        $writer->writeIntegerValue('notApplicableUserCount', $this->notApplicableUserCount);
        $writer->writeIntegerValue('remediatedUserCount', $this->remediatedUserCount);
        $writer->writeIntegerValue('unknownUserCount', $this->unknownUserCount);
    }

    /**
     * Sets the compliantUserCount property value. Number of compliant users
     *  @param int|null $value Value to set for the compliantUserCount property.
    */
    public function setCompliantUserCount(?int $value ): void {
        $this->compliantUserCount = $value;
    }

    /**
     * Sets the conflictUserCount property value. Number of conflict users
     *  @param int|null $value Value to set for the conflictUserCount property.
    */
    public function setConflictUserCount(?int $value ): void {
        $this->conflictUserCount = $value;
    }

    /**
     * Sets the errorUserCount property value. Number of error users
     *  @param int|null $value Value to set for the errorUserCount property.
    */
    public function setErrorUserCount(?int $value ): void {
        $this->errorUserCount = $value;
    }

    /**
     * Sets the nonCompliantUserCount property value. Number of NonCompliant users
     *  @param int|null $value Value to set for the nonCompliantUserCount property.
    */
    public function setNonCompliantUserCount(?int $value ): void {
        $this->nonCompliantUserCount = $value;
    }

    /**
     * Sets the notApplicableUserCount property value. Number of not applicable users
     *  @param int|null $value Value to set for the notApplicableUserCount property.
    */
    public function setNotApplicableUserCount(?int $value ): void {
        $this->notApplicableUserCount = $value;
    }

    /**
     * Sets the remediatedUserCount property value. Number of remediated users
     *  @param int|null $value Value to set for the remediatedUserCount property.
    */
    public function setRemediatedUserCount(?int $value ): void {
        $this->remediatedUserCount = $value;
    }

    /**
     * Sets the unknownUserCount property value. Number of unknown users
     *  @param int|null $value Value to set for the unknownUserCount property.
    */
    public function setUnknownUserCount(?int $value ): void {
        $this->unknownUserCount = $value;
    }

}
