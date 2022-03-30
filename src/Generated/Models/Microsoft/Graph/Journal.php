<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Journal extends Entity 
{
    /** @var Account|null $account  */
    private ?Account $account = null;
    
    /** @var string|null $balancingAccountId  */
    private ?string $balancingAccountId = null;
    
    /** @var string|null $balancingAccountNumber  */
    private ?string $balancingAccountNumber = null;
    
    /** @var string|null $code  */
    private ?string $code = null;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var array<JournalLine>|null $journalLines  */
    private ?array $journalLines = null;
    
    /** @var DateTime|null $lastModifiedDateTime  */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * Instantiates a new journal and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Journal
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Journal {
        return new Journal();
    }

    /**
     * Gets the account property value. 
     * @return Account|null
    */
    public function getAccount(): ?Account {
        return $this->account;
    }

    /**
     * Gets the balancingAccountId property value. 
     * @return string|null
    */
    public function getBalancingAccountId(): ?string {
        return $this->balancingAccountId;
    }

    /**
     * Gets the balancingAccountNumber property value. 
     * @return string|null
    */
    public function getBalancingAccountNumber(): ?string {
        return $this->balancingAccountNumber;
    }

    /**
     * Gets the code property value. 
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Gets the displayName property value. 
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'account' => function (self $o, ParseNode $n) { $o->setAccount($n->getObjectValue(Account::class)); },
            'balancingAccountId' => function (self $o, ParseNode $n) { $o->setBalancingAccountId($n->getStringValue()); },
            'balancingAccountNumber' => function (self $o, ParseNode $n) { $o->setBalancingAccountNumber($n->getStringValue()); },
            'code' => function (self $o, ParseNode $n) { $o->setCode($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'journalLines' => function (self $o, ParseNode $n) { $o->setJournalLines($n->getCollectionOfObjectValues(JournalLine::class)); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the journalLines property value. 
     * @return array<JournalLine>|null
    */
    public function getJournalLines(): ?array {
        return $this->journalLines;
    }

    /**
     * Gets the lastModifiedDateTime property value. 
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('account', $this->account);
        $writer->writeStringValue('balancingAccountId', $this->balancingAccountId);
        $writer->writeStringValue('balancingAccountNumber', $this->balancingAccountNumber);
        $writer->writeStringValue('code', $this->code);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('journalLines', $this->journalLines);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
    }

    /**
     * Sets the account property value. 
     *  @param Account|null $value Value to set for the account property.
    */
    public function setAccount(?Account $value ): void {
        $this->account = $value;
    }

    /**
     * Sets the balancingAccountId property value. 
     *  @param string|null $value Value to set for the balancingAccountId property.
    */
    public function setBalancingAccountId(?string $value ): void {
        $this->balancingAccountId = $value;
    }

    /**
     * Sets the balancingAccountNumber property value. 
     *  @param string|null $value Value to set for the balancingAccountNumber property.
    */
    public function setBalancingAccountNumber(?string $value ): void {
        $this->balancingAccountNumber = $value;
    }

    /**
     * Sets the code property value. 
     *  @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value ): void {
        $this->code = $value;
    }

    /**
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the journalLines property value. 
     *  @param array<JournalLine>|null $value Value to set for the journalLines property.
    */
    public function setJournalLines(?array $value ): void {
        $this->journalLines = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

}
