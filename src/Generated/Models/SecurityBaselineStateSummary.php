<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecurityBaselineStateSummary extends Entity implements Parsable 
{
    /**
     * @var int|null $conflictCount Number of conflict devices
    */
    private ?int $conflictCount = null;
    
    /**
     * @var int|null $errorCount Number of error devices
    */
    private ?int $errorCount = null;
    
    /**
     * @var int|null $notApplicableCount Number of not applicable devices
    */
    private ?int $notApplicableCount = null;
    
    /**
     * @var int|null $notSecureCount Number of not secure devices
    */
    private ?int $notSecureCount = null;
    
    /**
     * @var int|null $secureCount Number of secure devices
    */
    private ?int $secureCount = null;
    
    /**
     * @var int|null $unknownCount Number of unknown devices
    */
    private ?int $unknownCount = null;
    
    /**
     * Instantiates a new securityBaselineStateSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityBaselineStateSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecurityBaselineStateSummary {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.securityBaselineCategoryStateSummary': return new SecurityBaselineCategoryStateSummary();
            }
        }
        return new SecurityBaselineStateSummary();
    }

    /**
     * Gets the conflictCount property value. Number of conflict devices
     * @return int|null
    */
    public function getConflictCount(): ?int {
        return $this->conflictCount;
    }

    /**
     * Gets the errorCount property value. Number of error devices
     * @return int|null
    */
    public function getErrorCount(): ?int {
        return $this->errorCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'conflictCount' => function (ParseNode $n) use ($o) { $o->setConflictCount($n->getIntegerValue()); },
            'errorCount' => function (ParseNode $n) use ($o) { $o->setErrorCount($n->getIntegerValue()); },
            'notApplicableCount' => function (ParseNode $n) use ($o) { $o->setNotApplicableCount($n->getIntegerValue()); },
            'notSecureCount' => function (ParseNode $n) use ($o) { $o->setNotSecureCount($n->getIntegerValue()); },
            'secureCount' => function (ParseNode $n) use ($o) { $o->setSecureCount($n->getIntegerValue()); },
            'unknownCount' => function (ParseNode $n) use ($o) { $o->setUnknownCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the notApplicableCount property value. Number of not applicable devices
     * @return int|null
    */
    public function getNotApplicableCount(): ?int {
        return $this->notApplicableCount;
    }

    /**
     * Gets the notSecureCount property value. Number of not secure devices
     * @return int|null
    */
    public function getNotSecureCount(): ?int {
        return $this->notSecureCount;
    }

    /**
     * Gets the secureCount property value. Number of secure devices
     * @return int|null
    */
    public function getSecureCount(): ?int {
        return $this->secureCount;
    }

    /**
     * Gets the unknownCount property value. Number of unknown devices
     * @return int|null
    */
    public function getUnknownCount(): ?int {
        return $this->unknownCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('conflictCount', $this->conflictCount);
        $writer->writeIntegerValue('errorCount', $this->errorCount);
        $writer->writeIntegerValue('notApplicableCount', $this->notApplicableCount);
        $writer->writeIntegerValue('notSecureCount', $this->notSecureCount);
        $writer->writeIntegerValue('secureCount', $this->secureCount);
        $writer->writeIntegerValue('unknownCount', $this->unknownCount);
    }

    /**
     * Sets the conflictCount property value. Number of conflict devices
     *  @param int|null $value Value to set for the conflictCount property.
    */
    public function setConflictCount(?int $value ): void {
        $this->conflictCount = $value;
    }

    /**
     * Sets the errorCount property value. Number of error devices
     *  @param int|null $value Value to set for the errorCount property.
    */
    public function setErrorCount(?int $value ): void {
        $this->errorCount = $value;
    }

    /**
     * Sets the notApplicableCount property value. Number of not applicable devices
     *  @param int|null $value Value to set for the notApplicableCount property.
    */
    public function setNotApplicableCount(?int $value ): void {
        $this->notApplicableCount = $value;
    }

    /**
     * Sets the notSecureCount property value. Number of not secure devices
     *  @param int|null $value Value to set for the notSecureCount property.
    */
    public function setNotSecureCount(?int $value ): void {
        $this->notSecureCount = $value;
    }

    /**
     * Sets the secureCount property value. Number of secure devices
     *  @param int|null $value Value to set for the secureCount property.
    */
    public function setSecureCount(?int $value ): void {
        $this->secureCount = $value;
    }

    /**
     * Sets the unknownCount property value. Number of unknown devices
     *  @param int|null $value Value to set for the unknownCount property.
    */
    public function setUnknownCount(?int $value ): void {
        $this->unknownCount = $value;
    }

}
