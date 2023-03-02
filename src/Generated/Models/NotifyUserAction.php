<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NotifyUserAction extends DlpActionInfo implements Parsable 
{
    /**
     * Instantiates a new NotifyUserAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NotifyUserAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NotifyUserAction {
        return new NotifyUserAction();
    }

    /**
     * Gets the actionLastModifiedDateTime property value. The actionLastModifiedDateTime property
     * @return DateTime|null
    */
    public function getActionLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('actionLastModifiedDateTime');
    }

    /**
     * Gets the emailText property value. The emailText property
     * @return string|null
    */
    public function getEmailText(): ?string {
        return $this->getBackingStore()->get('emailText');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionLastModifiedDateTime' => fn(ParseNode $n) => $o->setActionLastModifiedDateTime($n->getDateTimeValue()),
            'emailText' => fn(ParseNode $n) => $o->setEmailText($n->getStringValue()),
            'policyTip' => fn(ParseNode $n) => $o->setPolicyTip($n->getStringValue()),
            'recipients' => fn(ParseNode $n) => $o->setRecipients($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the policyTip property value. The policyTip property
     * @return string|null
    */
    public function getPolicyTip(): ?string {
        return $this->getBackingStore()->get('policyTip');
    }

    /**
     * Gets the recipients property value. The recipients property
     * @return array<string>|null
    */
    public function getRecipients(): ?array {
        return $this->getBackingStore()->get('recipients');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('actionLastModifiedDateTime', $this->getActionLastModifiedDateTime());
        $writer->writeStringValue('emailText', $this->getEmailText());
        $writer->writeStringValue('policyTip', $this->getPolicyTip());
        $writer->writeCollectionOfPrimitiveValues('recipients', $this->getRecipients());
    }

    /**
     * Sets the actionLastModifiedDateTime property value. The actionLastModifiedDateTime property
     * @param DateTime|null $value Value to set for the actionLastModifiedDateTime property.
    */
    public function setActionLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('actionLastModifiedDateTime', $value);
    }

    /**
     * Sets the emailText property value. The emailText property
     * @param string|null $value Value to set for the emailText property.
    */
    public function setEmailText(?string $value): void {
        $this->getBackingStore()->set('emailText', $value);
    }

    /**
     * Sets the policyTip property value. The policyTip property
     * @param string|null $value Value to set for the policyTip property.
    */
    public function setPolicyTip(?string $value): void {
        $this->getBackingStore()->set('policyTip', $value);
    }

    /**
     * Sets the recipients property value. The recipients property
     * @param array<string>|null $value Value to set for the recipients property.
    */
    public function setRecipients(?array $value): void {
        $this->getBackingStore()->set('recipients', $value);
    }

}
