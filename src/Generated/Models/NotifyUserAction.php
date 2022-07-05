<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NotifyUserAction extends DlpActionInfo implements Parsable 
{
    /**
     * @var DateTime|null $actionLastModifiedDateTime The actionLastModifiedDateTime property
    */
    private ?DateTime $actionLastModifiedDateTime = null;
    
    /**
     * @var string|null $emailText The emailText property
    */
    private ?string $emailText = null;
    
    /**
     * @var OverrideOption|null $overrideOption The overrideOption property
    */
    private ?OverrideOption $overrideOption = null;
    
    /**
     * @var string|null $policyTip The policyTip property
    */
    private ?string $policyTip = null;
    
    /**
     * @var array<string>|null $recipients The recipients property
    */
    private ?array $recipients = null;
    
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
        return $this->actionLastModifiedDateTime;
    }

    /**
     * Gets the emailText property value. The emailText property
     * @return string|null
    */
    public function getEmailText(): ?string {
        return $this->emailText;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionLastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setActionLastModifiedDateTime($n->getDateTimeValue()); },
            'emailText' => function (ParseNode $n) use ($o) { $o->setEmailText($n->getStringValue()); },
            'overrideOption' => function (ParseNode $n) use ($o) { $o->setOverrideOption($n->getEnumValue(OverrideOption::class)); },
            'policyTip' => function (ParseNode $n) use ($o) { $o->setPolicyTip($n->getStringValue()); },
            'recipients' => function (ParseNode $n) use ($o) { $o->setRecipients($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the overrideOption property value. The overrideOption property
     * @return OverrideOption|null
    */
    public function getOverrideOption(): ?OverrideOption {
        return $this->overrideOption;
    }

    /**
     * Gets the policyTip property value. The policyTip property
     * @return string|null
    */
    public function getPolicyTip(): ?string {
        return $this->policyTip;
    }

    /**
     * Gets the recipients property value. The recipients property
     * @return array<string>|null
    */
    public function getRecipients(): ?array {
        return $this->recipients;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('actionLastModifiedDateTime', $this->actionLastModifiedDateTime);
        $writer->writeStringValue('emailText', $this->emailText);
        $writer->writeEnumValue('overrideOption', $this->overrideOption);
        $writer->writeStringValue('policyTip', $this->policyTip);
        $writer->writeCollectionOfPrimitiveValues('recipients', $this->recipients);
    }

    /**
     * Sets the actionLastModifiedDateTime property value. The actionLastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the actionLastModifiedDateTime property.
    */
    public function setActionLastModifiedDateTime(?DateTime $value ): void {
        $this->actionLastModifiedDateTime = $value;
    }

    /**
     * Sets the emailText property value. The emailText property
     *  @param string|null $value Value to set for the emailText property.
    */
    public function setEmailText(?string $value ): void {
        $this->emailText = $value;
    }

    /**
     * Sets the overrideOption property value. The overrideOption property
     *  @param OverrideOption|null $value Value to set for the overrideOption property.
    */
    public function setOverrideOption(?OverrideOption $value ): void {
        $this->overrideOption = $value;
    }

    /**
     * Sets the policyTip property value. The policyTip property
     *  @param string|null $value Value to set for the policyTip property.
    */
    public function setPolicyTip(?string $value ): void {
        $this->policyTip = $value;
    }

    /**
     * Sets the recipients property value. The recipients property
     *  @param array<string>|null $value Value to set for the recipients property.
    */
    public function setRecipients(?array $value ): void {
        $this->recipients = $value;
    }

}
